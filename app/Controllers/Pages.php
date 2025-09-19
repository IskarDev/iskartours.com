<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{

    public function home()
    {
        return view('pages/home');
    }
}
