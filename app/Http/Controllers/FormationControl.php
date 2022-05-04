<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\module;
use App\Model\formation;

class FormationControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Recuperation des donné soumises
    public function modulForm(Request $request)
    {
        $mods = getModule($request->id);
        $formation = formation::find($request->id);
        return view('pages/back/User/modulForm')->with('modules',$mods)->with('formation',$formation);
    }
}
