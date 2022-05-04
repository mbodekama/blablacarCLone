<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tp_apprenants extends Model
{
    protected $fillable=['lien_tp','date_depot','tp_id','user_id','signale'];
}
