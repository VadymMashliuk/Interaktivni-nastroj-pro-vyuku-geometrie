<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('domovskaStranka');
    }
    public function ctverec()
    {
        return view('ctverec');
    }
}
