<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class AdminEmailController extends BaseController
{
    public function Adregister()
    {
        return view('adregister');
    }
    public function Asendmail()
    {
        $to = 'Erasmoarjhay4@gmail.com';
        $subject = 'Testing';
        $message = 'Test Message';
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('erasmoarjhay4@gmail.com', $subject);
        $email->setMessage($message);
        if($email->send()){
            echo 'Email Sent Successfully';
        }else{
            $data = $email->printDebugger(['headers']);
            print($data);
        }
    }
    public function token($length)
    {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result),0, $length);
    }
}