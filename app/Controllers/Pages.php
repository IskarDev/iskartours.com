<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function index()
    {
        return view('pages/home');
    }

    public function view(string $page = 'home')
    {
        return view('pages/home');
    }
}
