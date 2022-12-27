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
            return redirect('signin');
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
    public function verify($id = null)
    {
        $ac = new AccountModel();
        $acc = $ac->where('token', $id)->first();
        $session = session();
        if($acc){
            $data = [
                'token' => $this->token(100),
                'status' => 'active',
            ];
            $ac->set($data)->where('token', $id)->update();
            $session->setFlashdata('msg', 'Account was verified');
        }else{
            $session->setFlashdata('msg', 'Invalid link');
        }
        
        return redirect('signin');
    }
    public function signin()
    {
        return view('signin');
    }
    public function auth()
    {
        $session = session();
        $ac = new AccountModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $d = $ac->where('email', $email)->first();
        if($d){
            $pass = $d['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                if($d['status'] == 'active'):
                $session_data = [
                    'id' => $d['id'],
                    'name' => $d['name'],
                    'email' => $d['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($session_data);
                return redirect('mainpage');
                else:
                $session->setFlashdata('msg', 'Account was not verified');
                return redirect('signin');
                endif;
            }else{
                $session->setFlashdata('msg', 'Invalid Password');
                return redirect('signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email not exist');
            return redirect('signin');
        }
    }
}
?>