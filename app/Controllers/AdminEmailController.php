<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class AdminEmailController extends BaseController
{
    public function Asendmail()
    {
        $to = 'Erasmoarjhay4@gmail.com';
        $subject = 'Testing';
        $message = 'Test Message';
        
    }

    public function Admail()
    {
        echo 'Hello';
    }
}