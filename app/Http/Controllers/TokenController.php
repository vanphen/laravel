<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
    public  function token (Request $request) {
        echo 'da co token gan vao request header';
        echo '<br>';
        echo 'token : '.$request->header('token');
    }
}
