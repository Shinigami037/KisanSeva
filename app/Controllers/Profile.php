<?php

namespace App\Controllers;

use CodeIgniter\Config\View;
use App\Models\UserModel;
use App\Models\OrdersModel;
use App\Models\CartModel;

class Profile extends BaseController
{
    public function profile()
    {
        $user = new UserModel();
        $order = new CartModel();

        $data = $user->where('id', session('userid'))->first();

        $order->select('*');
        $order->join('orders', 'cart.id = orders.cart_id');
        $order->where('order_status', 1);
        $data3 = $order->get()->getResultArray();

        return view('user/profile/profile', ['items' => $data , 'order' => $data3]);
    }
    public function update()
    {
        $user = new UserModel();
        $temp = [
            'id' => session('userid'),
            'customer_name' => $this->request->getVar('name'),
            'customer_address' => $this->request->getVar('address'),
            'customer_phone' => $this->request->getVar('phone'),
        ];
        $user->save($temp);
        // $data = $user->where('id',session('userid'))->first();
        // return view('user/profile/profile',['items' => $data]);
        echo json_encode($temp);
    }
    public function password()
    {
        $user = new UserModel();
        $data = $user->where('id', session('userid'))->first();
        return view('user/profile/profile', ['items' => $data]);
    }
}
