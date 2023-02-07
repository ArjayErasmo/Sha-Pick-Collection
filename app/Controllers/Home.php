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
        $checkout_model = new \App\Models\CheckoutModel();
        $checkout_model->where('userid', session()->get('id'))->delete();
        $id = $this->request->getPost('id');
        $cart_model = new \App\Models\CartModel();
        if(isset($id)){
            $price = $this->request->getPost('price');

            $data = [
                'menu_id' => $id,
                'user_id' => session()->get('id'),
                'total' => $price
            ];
            
  
            $cart_model->insert($data);
            
            return redirect()->route('cart');
        }
        
      
        $placeorder = new \App\Models\PlaceorderModel();
        $cartId['info'] = $cart_model->select('cartid')->where('user_id', session()->get('id'))->findAll();
        $arrayId = [];
        for($i = 0; $i < count($cartId['info']); $i++){
            array_push($arrayId, $cartId['info'][$i]['cartid']);
        }
        
        $placeorder->select('cart_id')->findAll();

        
        $data = [
            'cart_item' => $cart_model->select("*, concat(size, '<br>' ,color) as detail")
            ->join('products', 'products.id = cart.menu_id', 'inner')
            ->join('placeorder', 'cart.cartid = placeorder.cart_id', 'inner')
            ->get()->getResultArray(),

            'total' => $cart_model->selectSum('total')
            ->where('user_id', $id)->first(),
        ];
        return view('cart', $data);
    }
    public function deleteCart($id) {
        $cart_model = new \App\Models\CartModel();
        $cart_model->where('cartid', $id)->delete();
        return redirect()->route('cart');
    }
    public function checkout() 
    {
        $checkout_model = new \App\Models\CheckoutModel();
        $menuid = $this->request->getPost('menuid[]');
        $userid = $this->request->getPost('userid');
        $amount = $this->request->getPost('amount[]');
        for($i = 0; $i < count($menuid) ; $i++){
            $data = [
                'userid' => $userid,
                'menuid' => $menuid[$i],
                'amount' => $amount[$i]
            ];
           
            $checkout_model->insert($data);
        }
       
        $data = [
            'cart_item' => $cart_model->select("*, concat(size, '<br>' ,color) as detail")
            ->join('products', 'products.id = cart.menu_id', 'right')
            ->join('placeorder', 'cart.cartid = placeorder.cart_id', 'right')
            ->where('placeorder.user_id', session()->get('id'))
            ->whereNotIn('placeorder.cart_id', $arrayId)
            ->findAll(),

            'total' => $cart_model->selectSum('total')
            ->where('user_id', $id)->first(),
        ];
        return view('checkout', $data);
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
