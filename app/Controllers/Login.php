<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\App;

class Login extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function login()
    {
        return view('user/login/' . "login");
    }
    public function signup()
    {
        return view('user/login/' . "registration");
    }
    public function userLogin()
    {
        // var_dump(md5($this->request->getVar("password")));
        $validation = $this->validate([
            'username' => 'required',
            'password' => 'required|min_length[8]|max_length[16]',
        ]);
        if(!$validation){
            return view('user/login/login',['validation'=>$this->validator]);
        }
        else{
            echo 'Validated';
        }
        // $username = $this->request->getVar("username");
        // $password = $this->request->getVar("password");
        // echo "Hello $newvar";
        // var_dump(md5($this->request->getVar("password")));
        // return view('user/login/' . "login");
        // var_dump($this->request->getPost());
    }
    public function userSignup()
    {
        $name = $this->request->getVar("name");
        $username = $this->request->getVar("username");
        $email = $this->request->getVar("email");
        $password = $this->request->getVar("password");
        
        $values = [
            'user_name' => $username,
            'user_password' => md5($password),
            'user_email' => $email,
            'customer_name' => $name,
        ];

        $userModel = new \App\Models\UserModel();
        $query = $userModel->insert($values);
        if(!$query){
            return redirect()->back()->with('fail','Something went wrong');
        }else{
            return redirect()->to('registration')->with('Fail','Something went wrong');
        }
        // return view('user/login/' . "registration");
    }
}
