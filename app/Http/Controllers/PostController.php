<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\postRequest;

class PostController extends Controller
{
    public function list() {
        return view('posts.list');
    }

    public function detail($postid) {
        return view('posts.detail');
    }

    public function create(Request $request ) {
        return view('posts.create');
    }

    public function storeWithFormRequest(postRequest $request) {
        $validated = $request->validated();
    }
}
