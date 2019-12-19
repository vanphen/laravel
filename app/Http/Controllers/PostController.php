<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Requests\postRequest;
<<<<<<< HEAD
use App\Http\Requests\PostComment;
=======
>>>>>>> e0e9088724e303f45cf3faa6daf0fab418e4e40a
Use Alert;
class PostController extends Controller
{
    public function list() {
        $data = DB::table('posts')->where('deleted',0)->get();
        return view('posts.list', ['lists' => $data]);
    }

    public function detail($postid) {
        $detail = DB::table('posts')
            ->where('posts.id',$postid)
            ->where('deleted',0)
            ->get();
        $comment1 = DB::table('comments')->where('post_id',$postid)->get();
        return view('posts.detail',[
            'detail' => $detail,
            'comments' => $comment1,
        ]);
    }

    public function create() {
        return view('posts.create');
    }

<<<<<<< HEAD
    public function insert(postRequest $request) {
        $id = DB::table('posts')->insertGetId(
            [ 'title' => $request->input('title'),
                'content' => $request->input('content'),
                'deleted' => 0,
            ]
        );
        if (!empty($id)) {
            alert()->success('Post Created', 'Successfully');
            return redirect('/posts/detail/'.$id);
        }
    }
    public function edit($id){
        $detail = DB::table('posts')
            ->where('id',$id)
            ->where('deleted',0)
            ->get();
        return view('posts.edit',['detail' => $detail]);
    }

    public function editPost(postRequest $request, $id) {
        $update = DB::table('posts')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);
        if ($update) {
            alert()->success('Update', 'Successfully');
            return redirect('/posts/detail/'.$id);
        } else {
            alert()->error('deleted','failed :(');
            return redirect('home');
        }
    }

    public function delete($id) {
        $update = DB::table('posts')
            ->where('id', $id)
            ->update([
                'deleted' => 1,
            ]);
        alert()->success('Delete', 'Successfully');
        return redirect('home');
    }

    public function addcomment(PostComment $comment, $id){
        DB::table('comments')->insert(
            ['content_comment' => $comment->input('comment'), 'post_id' => $id , 'created_at' => NOW()]
        );
        alert()->success('Comment', 'Successfully');
        return redirect('/posts/detail/'.$id);
=======
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
>>>>>>> e0e9088724e303f45cf3faa6daf0fab418e4e40a
    }
}

