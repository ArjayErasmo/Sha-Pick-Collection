<?php

namespace App\Controllers;
use App\Models\AccountModel;

class AccountController extends BaseController
{
    #Registration
    public function store()
    {
        helper(['form']);
        $rules = [
            'name' => 'required|min_length[5]|max_length[50]',
            'email' => 'required|min_length[12]|max_length[100]|valid_email|is_unique[accounts.email]',
            'password' => 'required|min_length[8]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];
        if($this->validate($rules)){
            $ac = new AccountModel();
            $token = $this->token(100);
            $to = $this->request->getVar('email');
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $to,
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'token' => $token,
                'type' => 'client',
                'status' => 'inactive'
            ];
            $ac->save($data);
            $subject = 'confirm your registration';
            $message = 'hi '. $this->request->getVar('name') . ' Welcome to our website. To continue please confirm your account by clicking this <a href="'.base_url().'/verify/' . $token .'">link</a>';
            $this->SendMail($to, $subject, $message);
            return redirect('/sigin');
        }else{
            $data['validation']=$this->validator;
            echo view('registers', $data);
        }
    }
    public function registers()
    {
        helper(['form']);
        $data = [];
        return view('registers', $data);
    }
    public function token($length)
    {
        $str_result ='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result),0, $length);
    }
    public function SendMail($to, $subject, $message)
    {
        $to = $to;
        $subject = $subject;
        $message = $message;
        $headers = 'MIME-Version:1.0'. "\r\n";
        $headers = 'Content-type: text/html; charset=iso8859-1'. "\r\n";
        $email = \Config\Services::email();
        $email->setMailType("html");
        $email->setTo($to);
        $email->setFrom('arjhay@gmail.com', $subject);
        $email->setMessage($message);
        if($email->send()){
            echo 'email sent successfully';
        }else{
            $data = $email->printDebugger(['headers']);
            print($data);
        }
    }
    public function mail()
    {
        $this->SendMail();
    }
}
?>