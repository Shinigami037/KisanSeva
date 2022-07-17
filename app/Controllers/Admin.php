<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/home/' . "index");
        // return view('admin/login/' . "login");
    }
    public function login()
    {
        return view('admin/login/' . "login");
    }
    public function start()
    {
        // return view('admin/login/' . "login");
        helper(['form']);
        $username = $this->request->getVar("username");
        $password = $this->request->getVar("password");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userModel = new \App\Models\UserModel();
            $currentPass = md5($password);
            $users = $userModel->where('user_name', $username)->first();
            if (!isset($users)) {
                session()->setFlashdata('fail', 'Incorrect Username');
                return redirect('adminlogin')->withInput();
            } else {
                $oldPass = $users['user_password'];
                if ($oldPass == $currentPass) {
                    session_start();
                    $_SESSION['log'] = true;
                    $_SESSION['uname'] = $username;
                    $_SESSION['id'] = $users['id'];
                    return redirect('admin');
                    // header("location: index.php");
                } else {
                    // die('bhad me jao');
                    session()->setFlashdata('fail', 'Incorrect Password');
                    return redirect('adminlogin')->withInput();
                    // return redirect('login');
                }
            }
        }
    }
    public function profile()
    {
        return view('admin/profile/' . "profile");
    }
}
