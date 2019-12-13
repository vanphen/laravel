<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUser(){
        // tim moi quan he thong qua 1 -1
        $users = \App\User::has('Phone')->get();
        return view('pages.main', ['users' => $users]);
    }
}
