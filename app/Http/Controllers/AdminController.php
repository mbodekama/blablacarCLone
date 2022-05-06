<?php

namespace App\Http\Controllers;

use App\Mail\ApprenantMail;

use Illuminate\Http\Request;
use App\Model\formation;
use App\User;
use App\Model\module;

use App\Model\tp_apprenants;
use App\Model\tp_module;
use App\Model\ressource_module;

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

           //SAve formation
        public function saveForm(Request $request)
        {
          //  !!!!!!!!!!!!!!!!  Lien des image  !!!!!!!!!!!!!!!! 
              $lien =env('FILE_UPLOADED_LINK');
          //  !!!!!!!!!!!!!!!!  Lien des image  !!!!!!!!!!!!!!!!!! 


           //recuperation image1
           if(!empty($request->file('dossier')))

           {

            $img1 = $request->file('dossier');  // Récupération du name file  

            $path = $img1->store('imgFormation','public'); // dossier de stockage

            $lien_exercice = $lien.$path;  // Chemin d'accès de l'image 
            // resize_img($img1P,$img1P); //Fonction de redimensionnement 

           }
           else{

            $lien_exercice ="ND";

                return redirect('/uploadFail');

           }

            $form = [
                'image' => $lien_exercice,
                'lien' => $lien_exercice,
                'libelle'     =>$request->libelle,
                'description'   =>$request->description,
                'date'   =>$request->date,
                ];


            formation::create($form);

            return redirect('/home');
        }



        //Add formation 
        public function addForm(Request $request)
        {
            return view('pages/back/Admin/addForm');
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


        //Add Module
        public function addMod()
        {
            $formations = formation::all();
            return view('pages/back/Admin/addMod')->with('formations',$formations);
        }

        //SAve MODULES
        public function saveMod(Request $request)
        {
            $mod = [
                    'libelle_module' => $request->libelle_module,
                    'formations_id' => $request->formations_id,
                    'date' => $request->date,
                    'status' => $request->status];
            module::create($mod);


        }

    //Save ressourcs 
        public function saveRessource(Request $request)
        {


          //  !!!!!!!!!!!!!!!!  Lien des image  !!!!!!!!!!!!!!!! 
              $lien =env('FILE_UPLOADED_LINK');
          //  !!!!!!!!!!!!!!!!  Lien des image  !!!!!!!!!!!!!!!!!! 


           //recuperation image1
           if(!empty($request->file('image_illustration')))

           {

            $img1 = $request->file('image_illustration');  // Récupération du name file  

            $path = $img1->store('ressourceModules','public'); // dossier de stockage

            $lien_exercice = $lien.$path;  // Chemin d'accès de l'image 
            // resize_img($img1P,$img1P); //Fonction de redimensionnement 

           }

           else{

            $lien_exercice ="ND";

                return redirect('/uploadFail');

           }
                $res = [
                        'libelle' =>$request->libelle,
                        'description' =>$lien_exercice,
                        'lien'  =>$request->lien,
                        'nbr_telechargement' =>2,
                        'image_illustration' =>$lien_exercice,
                        'date'  =>$request->date,
                        'module_id'  =>$request->module_id];

                ressource_module::create($res);

                return redirect('/home');
        }


        //ADd tp

        public function addTp()
        {
            $formations = formation::all();
            return view('pages/back/Admin/addTp')->with('formations',$formations);
        }

        //Save My TP 
        public function saveTp(Request $request)
        {
            $row = ['module_id' =>$request->module_id,
                    'libelle_tp' =>$request->libelle_tp,
                    'description_tp' =>$request->description_tp,
                    'date_tp' =>$request->date_tp,
                    'date_fin' =>$request->date_fin,
                    'status' =>1];

            tp_module::create($row);
            return response()->json();
        }

}