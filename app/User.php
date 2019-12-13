<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public  function phones() {
        return $this->hasMany('App\Phone');
    }

    public  function roles() {
        return $this->belongsToMany('App\Role','user_role');
    }
}
