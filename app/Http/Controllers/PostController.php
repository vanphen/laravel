<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validate;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function store(Request $request, $id)
    {
    }
    public function storeWithFormRequest(Validate $request){
        return redirect()->route('success')->with('status', 'profile update');
    }
}
