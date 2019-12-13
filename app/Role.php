<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['id','name'];
    public function User(){
        return $this->belongsToMany('App\User','user_role');
    }
}
