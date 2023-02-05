<?php

namespace App\Controllers;

use App\Models\PlaceOrderModel;
use App\Models\UsersModel;



class User extends BaseController{

    public function profile(){
        $user_model = new UsersModel();
        $data['profile'] = $user_model->where('id', session()->get('loggedUser'))->first();
        return view('User/profile', $data);
    }

    public function update_profile($id)
    {
        $user = new UsersModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'address' => $this->request->getPost('address'),
            'phone_number' => $this->request->getPost('phone_number'),
        ];
        $user->update($id, $data);
        $session = session();
        $session->setFlashdata('profile', 'Updated Successfully!');
    
        return redirect()->route('profile');
    }


    public function show(){
        $profile = new UsersModel();
        $data = [
            'profile' => $profile->where('id',session()->get('loggedUser'))->first()
        ];
        return view('User/show',$data);
    }
    public function order_status(){

        $placeorder = new PlaceOrderModel();
        $data = [
            'placeorder' => $placeorder->select('*')
            ->join('menu', 'menu.id = orders.menuid', 'inner')
            ->where('orders.userid', session()->get('loggedUser'))
            ->where('orders.state', 'Pending')
            ->get()->getResultArray()
        ];

        return view('User/order_status', $data);
    }
    public function order_history(){
        $placeorder = new PlaceOrderModel();
        $data = [
            'placeorder' => $placeorder->select('*')
            ->join('menu', 'menu.id = orders.menuid', 'inner')
            ->where('orders.userid', session()->get('loggedUser'))
            ->where('orders.state', 'Approved')
            ->orWhere('orders.state', 'Cancelled')
            ->get()->getResultArray()
        ];
       
        return view('User/order_history', $data);
    }

    public function cancel_order($id)
    {
        $place_order = new PlaceOrderModel();
        $place_order->set('state', 'Cancelled')
            ->where('menuid', $id)->update();

        session()->setFlashdata('cancelled', 'cancelled');
        return redirect()->route('order_status');
    }
}