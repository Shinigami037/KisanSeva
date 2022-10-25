<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatModel extends Model
{
    protected $table = 'chatbot';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['question', 'response'];
    protected $returnType = 'array';
    // protected $allowedFields = ['user_name', 'user_passward', 'user_email', 'customer_name', 'customer_address', 'customer_phone'];
}
