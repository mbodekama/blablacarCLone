<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $fillable = ['libelle_module','formations_id','date','status'];
}
