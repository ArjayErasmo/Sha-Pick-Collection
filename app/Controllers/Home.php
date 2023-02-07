<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class Home extends BaseController
{
    //Footer Controller
    public function aboutUs()
    {
        return view('aboutUs');
    }
    public function returnpolicy()
    {
        return view('returnpolicy');
    }
    public function shippingpolicy()
    {
        return view('shippingpolicy');
    }
    public function paymentpolicy()
    {
        return view('paymentpolicy');
    }
    public function privacypolicy()
    {
        return view('privacypolicy');
    }
    public function termscondition()
    {
        return view('termscondition');
    }




    //Homepage
    public function index()
    {
        return view('welcome_message');
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
        $cart_model = new \App\Models\CartModel();
        $id = $this->request->getPost('id');
        $price = $this->request->getPost('price');
        if(!empty($id))
        {
            $data = [
                'menu_id' => $id,
                'user_id' => session()->get('id'),
                'total' => $price
            ];
            
            if($cart_model->insert($data)){
                return redirect()->route('cart');
            }
        }    
        $data = [
            'cart_item' => $cart_model->select("*, concat(size, '<br>' ,color) as detail")
            ->join('products', 'products.id = cart.menu_id', 'inner')
            ->findAll(),

            'total' => $cart_model->selectSum('total')
            ->where('user_id', $id)->first(),
        ];
        return view('cart', $data);
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







    //Menu Controller
    public function WomensWear()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', '0')->where('category', 'Womens Wear')->findAll()
        ];
        return view('menu/WomensWear', $data);
    }
    public function MensWear()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', '0')->where('category', 'Mens Wear')->findAll()
        ];
        return view('menu/MensWear', $data);
    }
    public function Kids_Babies()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', '0')->where('category', 'Kids Wear')->findAll()
        ];
        return view('menu/Kids_Babies', $data);
    }
    public function Appliances()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', '0')->where('category', 'Appliances')->findAll()
        ];
        return view('menu/Appliances', $data);
    }
    public function GadgetsAccessories()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', '0')->where('category', 'Accessories')->findAll()
        ];
        return view('menu/GadgetsAccessories', $data);
    }
    public function FootWear()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', '0')->where('category', 'Foot Wear')->findAll()
        ];
        return view('menu/FootWear',$data);
    }





    //Price Controller
    public function below_one()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', 0)->where('price <=', 100)->findAll()
        ];
        return view('price/below_one', $data);
    }
    public function one_two()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', 0)->where('price >=', 101)->where('price <=', 200)->findAll()
        ];
        return view('price/one_two', $data);
    }
    public function two_three()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->where('quantity >', 0)->where('price >=', 201)->where('price <=', 300)->findAll()
        ];
        return view('price/two_three', $data);
    }

}
