<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table ='products';
    protected $primaryKey ='id';
    protected $allowedFields = [
        'name',
        'description',
        'quantity',
        'price',
        'image',
        'created_at',
        'updated_at'
    ]; 
}
?>