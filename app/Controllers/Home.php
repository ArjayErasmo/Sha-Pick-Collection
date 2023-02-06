<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function aboutUs()
    {
        return view('aboutUs');
    }
    public function privacypolicy()
    {
        return view('privacypolicy');
    }
    public function termscondition()
    {
        return view('termscondition');
    }
    public function paymentpolicy()
    {
        return view('paymentpolicy');
    }
    public function shippingpolicy()
    {
        return view('shippingpolicy');
    }
    public function returnpolicy()
    {
        return view('returnpolicy');
    }
    public function log()
    {
        return view('log');
    }
    public function productlist()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', '0')->findAll()
        ];
        return view('productlist', $data);
    }
    public function mainpage()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', '0')->findAll()
        ];
        return view('mainpage', $data);
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout() 
    {
        return view('checkout');
    }
    public function myaccount()
    {
        return view('user/profile');
    }
    public function contact()
    {
        return view('contact');
    }
    public function WomensWear()
    {
        return view('menu/WomensWear');
    }
    public function MensWear()
    {
        return view('menu/MensWear');
    }
    public function Kids_Babies()
    {
        return view('menu/Kids_Babies');
    }
    public function GadgetsAccessories()
    {
        return view('menu/GadgetsAccessories');
    }
    public function Appliances()
    {
        return view('menu/Appliances');
    }
    public function FootWear()
    {
        return view('menu/FootWear');
    }

}
