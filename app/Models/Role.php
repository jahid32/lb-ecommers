<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    function users(){
        return $this->hasMany('App\Models\User');
    }
}
