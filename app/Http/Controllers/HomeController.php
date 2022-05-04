<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\formation;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(hasRole('apprenant'))
        {
        $formations = DB::table('formations')->orderBy('id','desc')->get();
        return view('appAs')->with('formations',$formations);
        }
        else
        {
            $formations = DB::table('formations')->orderBy('id','desc')->get();
            return view('appAdmin')->with('formations',$formations);   
        } 

    }
}
