<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class userHasRole extends Model
{
   protected $fillable = ['user_id','role_id'];
    
}
