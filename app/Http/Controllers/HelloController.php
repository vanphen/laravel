<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public  function  login() {
        var_dump($_GET);
        if (!empty($_GET)) {
            return view('admin');
        } else {
            return view('login');
        }
}
    //
}
