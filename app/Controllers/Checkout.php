<?php

namespace App\Controllers;

use CodeIgniter\Config\View;
use App\Models\ProductModel;
use App\Models\MainCategoryModel;
use App\Models\OrdersModel;
use App\Models\CartModel;
use CodeIgniter\I18n\Time;

class Checkout extends BaseController
{
    public function checkout($id = null)
    {
        $order = new OrdersModel();
        $order->select('*');
        $order->join('product', 'product.id = orders.product_id');
        $data = $order->where('cart_id', $id)->get()->getResultArray();
        return view('user/order/checkout',['items' => $data]);
    }
    public function confirmation()
    {
        return view('user/orders/confirmation');
    }
}