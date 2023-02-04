<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $DBGroup           ='default';
    protected $table             ='cart';
    protected $primaryKey        ='cartid';
    
}
?>