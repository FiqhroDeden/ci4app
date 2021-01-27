<?php

namespace App\Controllers;

class Dev extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function coba()
    {
        echo "Hello world";
    }

    //--------------------------------------------------------------------

}
