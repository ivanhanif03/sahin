<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'menu' => 'dashboard',
        ];

        return view('invitation', $data);
    }

    public function a()
    {
        $data = [
            'title' => 'Tes',
            'menu' => 'dashboard',
        ];

        return view('welcome_message', $data);
    }
}
