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
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'token' => $token,
                'type' => 'client',
                'status' => 'inactive'
            ];
            $ac->save($data);
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
}
?>