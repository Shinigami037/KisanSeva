<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $userlist = new UserModel;
        $data = $userlist->findAll();
        return view("user/pages/index",['name' => $data]);
    }
    public function category()
    {
        // return view('welcome_message');
        return view('user/pages/' . "category");
    }
    public function login()
    {
        // return view('welcome_message');
        return view('user/pages/' . "login");
    }
    public function single_blog()
    {
        // return view('welcome_message');
        return view('user/pages/' . "single_blog");
    }
    public function single_product()
    {
        // return view('welcome_message');
        return view('user/pages/' . "single_product");
    }public function elements()
    {
        // return view('welcome_message');
        return view('user/pages/' . "elements");
    }public function confirmation()
    {
        // return view('welcome_message');
        return view('user/pages/' . "confirmation");
    }
    public function contact()
    {
        // return view('welcome_message');
        return view('user/pages/' . "contact");
    }public function checkout()
    {
        // return view('welcome_message');
        return view('user/pages/' . "checkout");
    }
    public function cart()
    {
        // return view('welcome_message');
        return view('user/pages/' . "cart");
    }
    public function blog()
    {
        // return view('welcome_message');
        return view('user/pages/' . "blog");
    }public function tracking()
    {
        // return view('welcome_message');
        return view('user/pages/' . "tracking");
    }
  /* public function view($page = 'home')
    {
        echo "$page";
        if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }*/
}
