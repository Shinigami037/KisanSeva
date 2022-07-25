<?php

namespace App\Controllers;
use App\Models\UserModel;

use Config\App;

class Login extends BaseController
{
    public function login()
    {
        helper(['form']);
        return view('user/login/' . "login");
    }
    public function signup()
    {
        return view('user/login/' . "registration");
    }
    public function userLogin()
    {
        helper(['form']);
        $username = $this->request->getVar("username");
        $password = $this->request->getVar("password");
        // if ($username == 'Shinigami') {
        //     return redirect('admin');
        // }
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required|min_length[8]|alpha_numeric_punct',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                return view('user/login/login', $data);
            } else {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // $db = \Config\Database::connect();
                    $userModel = new UserModel();
                    $currentPass = md5($password);
                    $users = $userModel->where('user_name', $username)->first();
                    if (!isset($users)) {
                        session()->setFlashdata('fail', 'Incorrect Username');
                        return redirect('login')->withInput();
                    } else {
                        $oldPass = $users['user_password'];
                        if ($oldPass == $currentPass) {
                            $session = session();
                            $session->set('login', true);
                            $session->set('username', $username);
                            $session->set('useremail', $users['user_email']);
                            $session->set('userid', $users['id']);
                            return redirect('index');
                            // header("location: index.php");
                        } else {
                            // die('bhad me jao');
                            session()->setFlashdata('fail', 'Incorrect Password');
                            return redirect('login')->withInput();
                            // return redirect('login');
                        }
                    }
                    // print_r($users);

                    // $query   = $db->query('SELECT user_name, user_password FROM user');
                    // $result = $query->getResult();
                    // $oldPass = $result->user_password;
                    // $sql = "SELECT * FROM user WHERE user_name=? AND user_password=? ";
                    // $result = $db->query($sql, [$username, $password]);
                    // echo "$result->'user_name'";
                    // foreach ($result as $row) {
                    //     // echo $row->user_name;
                    //     $oldPass = $row->user_password;
                    //     break;
                    // }
                    // die();

                }
                // die('form submit');
            }
        }
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
        $userModel = new UserModel();
        $query = $userModel->insert($values);
        if (!$query) {
            // return redirect()->back()->with('fail','Something wrong');
            // return view('user/login/registration'); 
            return redirect()->back();
        } else {
            return redirect('login');
            // return view('user/login/login'); 
        }
        // return view('user/login/' . "registration");
    }
}
