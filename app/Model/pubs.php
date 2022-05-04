<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pubs extends Model
{   
	protected $fillable = [ 'mat','img','lien','abon','contact','datePub','statut'];
}
