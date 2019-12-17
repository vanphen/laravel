<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list() {
        echo  'list';
    }

    public function detail($postid) {
        echo 'van thao';
    }

    public function posts() {
        echo 'posts';
    }

    public function create() {

    }
}
