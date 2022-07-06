<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCategoryModel extends Model
{
    protected $table = 'sub_category';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    // protected $allowedFields = ['user_name', 'user_passward', 'user_email', 'customer_name', 'customer_address', 'customer_phone'];
}