<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function getUser(Request $request) {
            $users = User::orderBy('id', 'desc');
            $userSearch = $request->query();
            if (!empty($request->query())) {
                if (!empty($userSearch['id'])) {
                    $users = $users->where('id', $userSearch['id']);
                }
                if (!empty($userSearch['name'])) {
                    $users = $users->where('name', 'like', '%'.$userSearch['name'].'%');
                }
                if (!empty($userSearch['class'])) {
                    $users = $users->where('class', 'like', '%'.$userSearch['class'].'%');
                }
            }
            $users = $users->get();
        return view('page.main', ['users' => $users]);
    }
}
