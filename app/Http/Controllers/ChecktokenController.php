<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChecktokenController extends Controller
{
    public  function api () {
        if (!empty($_GET)) {
            header("Token: ".$_GET['token']);
            return view('welcome');
        } else {
            return view('login');
        }
    }
}
