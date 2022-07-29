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
    public function confirmation($id = null)
    {
        // die($id);
        $myTime = new Time('now');
        $order = new OrdersModel();
        $cart = new CartModel();
        $cart->update($id,['purchase_date' => $myTime]);
        $ids = $order->where('cart_id', $id)->findColumn('id');
        $order->whereIn('id',$ids)->set(['order_date' => $myTime])->update();
        // die(print_r($hello));
        $order->select('*');
        $order->join('product', 'product.id = orders.product_id');
        $data = $order->where('cart_id', $id)->get()->getResultArray();
        $cart->update($id, ['order_status' => 1]);
        return view('user/order/confirmation',['items' => $data]);
    }
}