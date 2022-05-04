<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    protected $fillable = ['libelle','description','lien','nbr_telechargement','image_illustration'];
}
