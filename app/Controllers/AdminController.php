<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    public function addproduct()
    {
        return view('admin/addproduct');
    }
    public function saveproduct()
    {
        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        $quantity = $this->request->getVar('quantity');
        $price = $this->request->getVar('price');


        $pr = new ProductsModel();
        $data = [
            'name' => $name,
            'description' => $description,
            'quantity' => $quantity,
            'price' => $price,
 
            

        ];
        $pr->save($data);
        $session = session();
        $session->setFlashdata('msg', 'Product Successfully added');
        return redirect()->to($_SERVER['HTTP_REFERER']);

        
    }
    public function products()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->findAll()
        ];
        return view('admin/products', $data);
    }

}
?>