<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    public function products()
    {
        $pr = new ProductsModel();
        $data = [
            'products' => $pr->findAll()
        ];
        return view('admin/products', $data);
    }
    public function addproduct()
    {
        return view('admin/addproduct');
    }
    public function saveproduct()
    {
        $validation = $this->validate([
            
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Product name is required.'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Product description is required.'
                ]
            ],
            'price' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Product price is required.',
                    'numeric' => 'Product price needs  to be numeric.'
                ]
            ],
            'quantity' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Product quantity is required.',
                    'numeric' => 'Product quantity needs  to be numeric.'
                ]
            ],
            'category' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Product category is required.'
                ]
            ],
            // 'image' => [
            //     'label' => 'Image File',
            //     'rules' => 'uploaded[products]'
            //         . '|is_image[products]'
            //         . '|mime_in[product,image/jpg,image/jpeg,image/gif,image/png,image/webp]'

            // ],


        ]);

        if (!$validation) {
            $msg = ['validation' => $this->validator];
            return view('admin/addproduct', $msg);
        }else {
        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        $quantity = $this->request->getVar('quantity');
        $price = $this->request->getVar('price');
        $category = $this->request->getVar('category');
        $img = $this->request->getFile('image');

    
        $pr = new ProductsModel();
        $data = [
            'name' => $name,
            'description' => $description,
            'quantity' => $quantity,
            'price' => $price,
            'category' => $category,
            'image' => $img->getClientName()
        ];
        $session = session();
        $session->setFlashdata('msg', 'Product Successfully added');
        if($pr->save($data)){
            return redirect()->to($_SERVER['HTTP_REFERER']);
        }else{
            return redirect('products');
        }
    }
        
        
    }
    
    public function edit($id = null){
        $pr = new ProductsModel();
        $data['products'] = $pr->findAll($id);
        return view('admin/edit', $data);
    }
    public function update($id = null){
        $pr = new ProductsModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'quantity' => $this->request->getPost('quantity'),
            'price' => $this->request->getPost('price')
        ];
        $prod->update($id,$data);
        $session = session();
        $session->setFlashdata('msg', 'Updated Successfully!');
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
    public function delete($id = null){
        $prod = new ProductsModel();
        $prod->delete($id);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }

}
?>