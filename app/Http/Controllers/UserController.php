<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUser(){
        $users = DB::select(DB::raw("
            select users.id,first_name,last_name,number,name
            from  users, user_role, roles, phones
            where users.id = user_role.user_id
            and roles.id = user_role.role_id
            and  users.id = phones.user_id"
        ));
        $usermodel  = new UserModel ();
        $arr = [];
        foreach ($users as $user) {
            $usermodel->id = $user->id;
            $usermodel->firstname = $user->first_name;
            $usermodel->lastname = $user->last_name;
            $usermodel->phone = $user->number;
            $usermodel->role = $user->name;
            $arr[] = (array)$usermodel;
        }
        dd($arr);
        return view('pages.main', ['users' => $arr]);
    }
}
class UserModel  {
    public $id;
    public $firstname;
    public $lastname;
    public $role = [];
    public $phone = [];
}
