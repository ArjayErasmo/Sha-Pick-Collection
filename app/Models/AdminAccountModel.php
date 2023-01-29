<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'adminaccounts';
    protected $allowedFields = [
        'name',
        'email',
        'password',
        'token',
        'type',
        'status'

    ];
}
?>