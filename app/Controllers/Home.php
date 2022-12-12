<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function mainpage()
    {
        return view('mainpage');
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
    public function productdetail()
    {
        return view('productdetail');
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
        return view('myaccount');
    }
    public function contact()
    {
        return view('contact');
    }
    public function wishlist()
    {
        return view('wishlist');
    }

}
