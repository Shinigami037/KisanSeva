<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Weather extends BaseController
{
    public function index()
    {
        $city_name = "Jaipur";
        $api_key = "282567a38dd20b4386245124253a735f";

        $url =  "https://api.openweathermap.org/data/2.5/weather?q=" . $city_name . "&appid=" . $api_key;

        // $temp = 0;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        $temp = $data['main']['temp'] ? $data['main']['temp'] - 273.15 : 0;
        $humidity = $data['main']['humidity'] ? $data['main']['humidity'] : 0;
        $clouds = $data['clouds']['all'] ? $data['clouds']['all'] : 0;
        $temp2['user'] = [$city_name, $temp, $humidity, $clouds];
        // print_r($temp);

        return view("user/weather/weather", $temp2);
        // $userlist = new UserModel;
        // $data = $userlist->findAll();
        // return view("user/home/index",['name' => $data]);
    }
}



// // kvstore API url


// // Collection object
// $data = [
//   'collection' => 'RapidAPI'
// ];

// // Initializes a new cURL session


// // Set the CURLOPT_RETURNTRANSFER option to true


// // Set the CURLOPT_POST option to true for POST request
// curl_setopt($curl, CURLOPT_POST, true);

// // Set the request data as JSON using json_encode function
// curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));

// // Set custom headers for RapidAPI Auth and Content-Type header
// curl_setopt($curl, CURLOPT_HTTPHEADER, [
//   'X-RapidAPI-Host: kvstore.p.rapidapi.com',
//   'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
//   'Content-Type: application/json'
// ]);

// // Execute cURL request with all previous settings


// // Close cURL session
// curl_close($curl);

// echo $response . PHP_EOL;
// 
