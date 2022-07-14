<?php

namespace App\Models;

use CodeIgniter\Model;

class MainCategoryModel extends Model
{
    protected $table = 'main_category';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $allowedFields = ['name'];
}