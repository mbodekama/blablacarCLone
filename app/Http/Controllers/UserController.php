<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\formation;
use App\Model\module;
use App\Model\tp_module;
use App\Model\tp_apprenants;

use Auth;
use DB;
use Validator;


class UserController extends Controller
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

    public function dashClt()
    {
        return view('pages/back/User/dashClt');
    }

    //Recuperation des donné soumises
    public function addDownload(Request $request)
    {
        $form= formation::find($request->id);
        $form->nbr_telechargement +=1;
        $form->save();

        return $form->nbr_telechargement;
    }

    //Affiche  Liste depot
        public function depot()
        {

            $forms = formation::orderBy('id', 'desc')->get();
            return view('pages/back/User/depot')->with('forms',$forms);
        }

    //OBTENIR LES MODULES D'UNE FORMATION 
        public function getFormModule(Request $request)
        {
            $mods = module::where('formations_id','=',$request->idForm)->where('status','=',1)->orderBy('id', 'desc')->get();
            $output='<option value="choix"> --  module --</option>';
            foreach ($mods as $mod) {
                $output .='<option value="'.$mod->id.'">'.$mod->libelle_module.'</option>';
            }
            return $output;
        }

    //OBTENIR LES EXERCICES D'UN MODULE 
        public function getModTp(Request $request)
        {
            $tps = tp_module::where('module_id','=',$request->idMod)->where('status','=',1)->orderBy('id', 'desc')->get();
            $output='<option value="choix">--  tp traité --</option>';
            foreach ($tps as $tp) {
                $output .='<option value="'.$tp->id.'">'.$tp->libelle_tp.'</option>';
            }
            return $output;
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

        public function uploadOk()
        {
            return view('pages/back/User/uploadOk');
        }

        public function uploadFail()
        {
            // return phpinfo();
            return view('pages/back/User/uploadFail');
        }

        public function profil()
        {
            return view('pages/back/User/profil');
        }

        public function aide()
        {
            return view('pages/back/User/aide');
        }
}