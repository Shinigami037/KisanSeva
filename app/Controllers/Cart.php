<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\MainCategoryModel;
use App\Models\SubCategoryModel;
use CodeIgniter\CLI\Console;
use CodeIgniter\Config\View;
use CodeIgniter\Entity\Cast\BaseCast;

class Cart extends BaseController
{
    public function cart()
    {
        // $data['items'] = array(session('cart'));
        $product = new ProductModel();
        $data['items'] = $product->findAll();
        return view('user/product/cart' ,$data);
    }  
    public function buy($id = null)
    {
        
        return redirect()->to('cart');
    }
    private function exists($id) {
        $items = array_values(session('cart'));
        for ($i = 0; $i < count($items); $i++) {
            if ($items[$i]['id'] == $id) {
                return $i; 
                }
            }
        return -1;  
        }
}
