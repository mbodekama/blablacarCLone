<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class appexcel extends Model
{
    protected $fillable = [	'type','societeSousTraitante',	'respoSociete',	'numeroRespo',	'natureActivicte',	'lieuActivicte',	'debutActivicte',	'finActivicte',	'referantSucaf',	'fonctionRefSucaf',	'complexe',	'attributaire',	'fonction',	'numeroBadge',	'dateAttribution',	'datePrevueFin',	'codePhoto',	'typePiece', 'numeroPiece',	'status',	'observation'];
}
