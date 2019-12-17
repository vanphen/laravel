<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function list() {
        return view('posts.list');
    }

    public function detail($postid) {
        return view('posts.detail');
    }

    public function create() {
        return view('posts.create');
    }
}
