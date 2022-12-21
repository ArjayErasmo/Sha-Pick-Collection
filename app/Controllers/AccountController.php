<?php

namespace App\Controllers;

class AccountController extends BaseController
{
    public function registers()
    {
        return view('registers');
    }
    public function token($length)
    {
        $str_result ='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result),0, $length);
    }
}
?>