<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $db = db_connect();
        // $data = [
        //     'title' => 'Page Abadi Sanjaya',
        // ];
        // return view('authContent/registration', $data);
        // return view('userContent/profile', $data);
        return view('welcome_message');
        // echo "Hello";
    }
}
