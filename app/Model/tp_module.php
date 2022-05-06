<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tp_module extends Model
{
    protected $fillable =['module_id','libelle_tp','description_tp','date_tp','date_fin','status'];
}
