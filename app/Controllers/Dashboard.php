<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('');
    }
    public function dashboard()
    {
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        
        $data = [
            'title' => 'Dashboard',
            'userInfo' => $userInfo
        ];
        return view('auth/dashboard', $data);
    }
    public function profile()
    {
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        
        $data = [
            'title' => 'Profile',
            'userInfo' => $userInfo
        ];
        return view('auth/profile', $data);
    }
}
?>