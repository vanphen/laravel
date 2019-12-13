<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['id','first_name','last_name'];
    public function phone()
    {
        return $this->hasOne('App\Phone');
    }

    public function Role(){
        return $this->belongsToMany('App\Role','user_role','user_id','role_id');
    }
}
