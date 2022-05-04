<?php

use App\Model\pubs;
use App\Model\module;
use App\Model\ressource_module;
use App\Model\tp_module;
//Verifie le role du connecte

if(!function_exists('getModule'))
{

	function getModule($id)
	{
          $mod = module::where('formations_id','=',$id)
         				->where('status','=',1)->get();
         return $mod;
    }
}

if(!function_exists('getRessources'))
{

	function getRessources($id)
	{
          $ressource = ressource_module::where('module_id','=',$id)->get();
         return $ressource;
    }
}

if(!function_exists('getTpInfo'))
{

  function getTpInfo($id)
  {
          $tp = tp_module::find($id);
         return $tp;
    }
}


