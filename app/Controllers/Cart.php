<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\MainCategoryModel;
use App\Models\OrdersModel;
use App\Models\CartModel;
use CodeIgniter\I18n\Time;


class Cart extends BaseController
{
    public function cart()
    {
        $newsession = new CartModel();
        $order = new OrdersModel();

        $fetch = $newsession->where('user_id', session('userid'))->where('order_status', 0)->first();

        $order->select('*');
        $order->join('product', 'product.id = orders.product_id');
        $data = $order->where('cart_id', $fetch['id'])->get()->getResultArray();
        // $data['items'] = $order->findAll();
        return view('user/product/cart', ['items' => $data]);
    }
    public function buy($id = null)
    {
        if (session('login') != true) {
            return redirect()->to('login');
        } else {
            $myTime = new Time('now');

            $newsession = new CartModel();
            $product = new ProductModel();
            $order = new OrdersModel();

            $fetch = $newsession->where('user_id', session('userid'))->where('order_status', 0)->first();
            $pro = $product->find($id);

            if (empty($fetch)) {
                $newid = md5($myTime);
                $data = [
                    'id' => $newid,
                    'user_id' => session('userid'),
                ];
                $data2 = [
                    'product_id' => $id,
                    'product_quantity' => 1,
                    'product_price' => $pro['price'],
                    'cart_id' => $newid,
                ];

                $newsession->insert($data);
                $order->insert($data2);
                $order->select('*');
                $order->join('product', 'product.id = orders.product_id');
                $order->where('cart_id', $newid);
                $data3 = $order->get()->getResultArray();
                return redirect()->to('cart' . ['items' => $data3])->with('items', $data3);
                // die();
                // $order->select('*');
                // $subcategory->join('main_category', 'main_category.id = sub_category.category_id');
                // $data = $subcategory->get()->getResultArray();
                // return view('user/product/cart');
            } else {

                $data2 = [
                    'product_id' => $id,
                    'product_quantity' => 1,
                    'product_price' => $pro['price'],
                    'cart_id' => $fetch['id'],
                ];

                $order->insert($data2);
                $order->select('*');
                $order->join('product', 'product.id = orders.product_id');
                // $order->where('cart_id', $fetch['id']);
                $data3 = $order->where('cart_id', $fetch['id'])->get()->getResultArray();
                // die(print_r($data3));
                // return redirect('cart')->withInput(['items' => $data3]);
                return view('user/product/cart', ['items' => $data3]);
                // $hello = $newsession->findAll();
                // die();

            }


            // $data['items'] = $order->findAll();
            // return view('user/product/cart', ['items' => $data3]);
            // $oldsession = $newsession->where('id', md5(session('userid'))
            // if (md5(session('userid'))

            // $hello = $newsession->findAll();

            // die(md5($myTime));

        }
    }
    public function productUpdate(){
        $data = [ 'items' => 0 ];
        echo json_encode($data);
    }

}
