<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['id','name'];
    public function UserRole()
    {
        return $this->hasMany('App\User_Role','role_user','user_id', 'role_id');
    }
}
