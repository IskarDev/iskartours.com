<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{

    public function home()
    {
        return view('pages/home');
    }

    public function view(string $page = 'home')
    {
         if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        return view('pages/' . $page);
    }
}
