<?php

namespace App\Http\Controllers;

use App\Mail\ApprenantMail;

use Illuminate\Http\Request;
use App\Model\formation;
use App\User;

use App\Model\tp_apprenants;

use Auth;
use Mail;
use DB;
use Validator;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dash()
    {
        return view('pages/back/Admin/dash');
    }


    public function tpAprenant()
    {
            $forms = formation::orderBy('id', 'desc')->get();
        return view('pages/back/Admin/tpAprenant')->with('forms',$forms);
    }

    public function mytable(Request $request)
    {

        $allTp = tp_apprenants::where('tp_id','=',$request->exo)
                                ->orderBy('id','desc')->get();


        return view('pages/back/Admin/mytable')->with('allTp',$allTp);
    }

    public function sendNotif(Request $request)
    {
     Mail::to($request->userMail)->send(new ApprenantMail($request->user()->name));
     return  response()->json();
    }


    public function sendObserv(Request $request)
    {
       $user= User::find($request->userId);
     Mail::to($user->email)->send(new ApprenantMail($user->name,$request->textObsv));
     return  response()->json();

    }

    //Upload d'exercie 
        public function uploadExo(Request $request)
        {


      //  !!!!!!!!!!!!!!!!  Lien des image  !!!!!!!!!!!!!!!! 
          $lien =env('FILE_UPLOADED_LINK');
      //  !!!!!!!!!!!!!!!!  Lien des image  !!!!!!!!!!!!!!!!!! 


       //recuperation image1
       if(!empty($request->file('dossier')))

       {

        $img1 = $request->file('dossier');  // Récupération du name file  

        $path = $img1->store('tpApprenant','public'); // dossier de stockage

        $lien_exercice = $lien.$path;  // Chemin d'accès de l'image 
        // resize_img($img1P,$img1P); //Fonction de redimensionnement 

       }

       else{

        $lien_exercice ="ND";

            return redirect('/uploadFail');

       }
            $exo = [
                'lien_tp' => $lien_exercice,
                'date_depot' => date('d/m/Y'),
                'tp_id'     =>$request->exercice,
                'user_id'   =>Auth::id(),
                ];

            tp_apprenants::create($exo);

            return redirect('/uploadOk');
        }


}