<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['id','first_name','last_name'];
    public function phone()
    {
        return $this->hasMany('App\Phone');
    }
    public function role()
    {
        return $this->belongsToMany('App\Role');
    }
}
