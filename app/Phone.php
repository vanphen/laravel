<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['id','number','user_id'];
}
