<?php

namespace App\Controllers;
use App\Models\MenuModel;

class ProductsController extends BaseController
{
    public function spo($id)
    {
        $menu_model = new MenuModel();
        $result['result'] = $menu_model->find($id);
        return view('singlesearch', $result);
    }
}
?>