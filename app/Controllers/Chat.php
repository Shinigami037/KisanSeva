<?php

namespace App\Controllers;

use App\Models\ChatModel;
use CodeIgniter\Controller;

class Chat extends BaseController
{
    public function index()
    {

        return view("user/chatbot/bot");
        // $userlist = new UserModel;
        // $data = $userlist->findAll();
        // return view("user/home/index",['name' => $data]);
    }
    // public function chat()
    // {
    //     $conn = mysqli_connect("localhost", "rootuser", "root", "kisanseva_db") or die("Database Error");
    //     // getting user message through ajax
    //     $getMesg = mysqli_real_escape_string($conn, $_POST['text']);
    //     //checking user query to database query
    //     $check_data = "SELECT response FROM chatbot WHERE question LIKE '%$getMesg%'";
    //     $run_query = mysqli_query($conn, $check_data) or die("Error");
    //     // if user query matched to database query we'll show the reply otherwise it go to else statement
    //     if (mysqli_num_rows($run_query) > 0) {
    //         //fetching replay from the database according to the user query
    //         $fetch_data = mysqli_fetch_assoc($run_query);
    //         //storing replay to a varible which we'll send to ajax
    //         $replay = $fetch_data['response'];
    //         echo $replay;
    //     } else {
    //         echo "Sorry can't be able to understand you!";
    //     }
    //     // $user = new ChatModel();
    //     // $data = $this->request->getVar('value');
    //     // echo json_encode($data);
    //     // die($data);
    //     // // $question = $user->where('question', $_POST['text'])->findAll();
    //     // die(print_r($question));
    //     // if ($question > 0) {
    //     //     $reply = $question['response'];
    //     //     echo $reply;
    //     // } else {
    //     //     echo "Sorry can't be able to understand you!";
    //     // }
    //     // print_r($question);
    // }
}
