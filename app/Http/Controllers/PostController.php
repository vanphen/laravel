<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Requests\postRequest;
Use Alert;
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

    public function storeWithFormRequest(postRequest $request) {
        $post = DB::table('posts')->insert(
            [ 'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]
        );
        if ($post) {
            alert()->success('Post Created', 'Successfully');
            return redirect('list');
        }
    }
}
