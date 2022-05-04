<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_has_roles extends Model
{
   protected $fillable = ['user_id','role_id'];
    
}
