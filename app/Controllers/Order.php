<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function checkout()
    {
        return view('user/order/' . "checkout");
    }
    public function tracking()
    {
        return view('user/order/' . "tracking");
    }
    public function confirmation()
    {
        return view('user/order/' . "confirmation");
    }
}