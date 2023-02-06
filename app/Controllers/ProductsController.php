<?php

namespace App\Controllers;
use App\Models\MenuModel;

class ProductsController extends BaseController
{
    public function mp($id) 
    {
        $menu_model = new MenuModel();
        $result['result'] = $menu_model->find($id);
        return view('singlesearch', $result);
    }
    public function FT($id) 
    {
        $footwear_model = new MenuModel();
        $footwear['result'] = $footwear_model->find($id);
        return view('singlesearchFootWear', $footwear);
    }
    public function Gad($id) 
    {
        $Gadgets_model = new MenuModel();
        $Gadgets['result'] = $Gadgets_model->find($id);
        return view('singlesearchGadgets', $Gadgets);
    }
    public function Appl($id) 
    {
        $Appliances_model = new MenuModel();
        $Appliances['result'] = $Appliances_model->find($id);
        return view('singlesearchAppliances', $Appliances);
    }
}
?> 