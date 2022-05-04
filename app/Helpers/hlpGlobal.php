<?php
use App\User;


//Verifie le role du connecte

if(!function_exists('hasRole'))
{
	function hasRole($role)
	{
         $role = DB::table('users')
            ->join('user_has_roles','user_has_roles.user_id','=','users.id')
            ->join('roles','user_has_roles.role_id','=','roles.id')
            ->select('roles.*')
            ->where('roles.libelle','=',$role)
            ->where('users.id','=',Auth::id())
            ->first();
          if (!empty($role)) 
          {
          	return 1;
          }
          else
          {
          	return 0;
          }
	}
}


//Obtenir les info d'un utilisateur
if(!function_exists('getUser'))
{
  function getUser($id)
  {
         $user = User::find($id);
          return $user;
  }
}
