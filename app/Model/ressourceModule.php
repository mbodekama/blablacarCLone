<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ressource_module extends Model
{
    protected $fillable = ['libelle','description','lien','nbr_telechargement','image_illustration','date','module_id'];
}
