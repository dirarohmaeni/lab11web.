<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'content' => 'Ini halaman utama'
        ];

        return view('home', $data);
    }
}