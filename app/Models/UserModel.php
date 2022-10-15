<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['user_name', 'user_email', 'user_contact', 'user_password'];
    protected $returnType = 'array';
    // protected $allowedFields = ['user_name', 'user_passward', 'user_email', 'customer_name', 'customer_address', 'customer_phone'];
}
