<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kontak extends BaseController
{
    public function index()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('kontak/index');
        }
    }
}
