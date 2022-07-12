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
        helper(['register', 'url']);
        if (!$this->validate([
            'username' => ['label' => 'Username', 'rules' => 'required'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[8]|alpha_numeric_punct'],
        ])) {
            return view('pages/'."register", [
                'validation' => $this->validator,
            ]);
        }
        // var_dump(md5($this->request->getVar("password")));
        // $validation = $this->validate([
        //     'username' => 'required',
        //     'password' => 'required|min_length[8]',
        // ]);
        // if(!$validation){
        //     // return view('user/login/login',['validation'=>$this->validator])->withInput();
        //     // return redirect()->back()->withInput()->with('validation',$this->validator);
        //     return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        // }
        // else{
            echo 'Validated';
        // }
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
            // return redirect()->back()->with('fail','Something wrong');
            // return view('user/login/registration'); 
            return redirect()->back();
        }else{
            return redirect('index');
            // return view('user/login/login'); 
        }
        // return view('user/login/' . "registration");
    }
}
