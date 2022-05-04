<?php

use App\Model\pubs;
//Verifie le role du connecte

if(!function_exists('getImg'))
{

	function getImg()
	{
         return pubs::where('statut','=',0)->get();
    }
}


