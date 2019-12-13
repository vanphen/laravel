<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUser(Request $request){
        $infoUser = \App\User::all();
        if (!empty($request->query())) {
            $userSearch = $request->query();
            if (!empty($userSearch['id'])) {
                $infoUser = array(\App\User::find($userSearch['id']));
            }
            if (!empty($userSearch['phone'])) {
                $infoUser = whereHas('phones', function ($query) use ($userSearch) {
                    $query->where('number', 'like', '%'.$userSearch['phone'].'%');
                })->get();
            }
            if (!empty($userSearch['role'])) {
                $infoUser = User::whereHas('roles', function ($query) use ($userSearch) {
                    $query->where('name', 'like', '%'.$userSearch['role'].'%');
                })->get();
            }
            // search ca 2 truong phone va role name
            if (!empty($userSearch['phone']) && !empty($userSearch['role'])) {
                $infoUser = User::whereHas('phones', function ($query) use ($userSearch) {
                    $query->where('number', 'like', '%'.$userSearch['phone'].'%');
                })->whereHas('roles', function ($query) use ($userSearch) {
                    $query->where('name', 'like', '%'.$userSearch['role'].'%');
                })->get();
            }
        }
        return view('pages.main', ['users' => $infoUser]);
    }
}

