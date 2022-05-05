<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| MENU DE GESTION DES INTERFACES FONCTIONNELLES DU CLIENT
|--------------------------------------------------------------------------
|
| Ici nous gérons les routes du menu client
|
*/

  /* ---------------
       PROFIL_USER
  ------------------*/



    // Infos
     Route::get('/dashClt','UserController@dashClt')->name('dashClt');
     
     //LEs modules d'une formation
     Route::post('/modulForm','FormationControl@modulForm')->name('modulForm');


    // Depot
     Route::get('/depot','UserController@depot')->name('depot');

    //Get Module d1 formation
     Route::get('/getFormModule','UserController@getFormModule');

    //Get Exercice d1 module     
     Route::get('/getModTp','UserController@getModTp');
    // UPLOUAD EXERCCE 
     Route::post('/uploadExo','UserController@uploadExo')->name('uploadExo');
    
    // UPLOUAD EXERCCE  OK
     Route::get('/uploadOk','UserController@uploadOk')->name('uploadOk');
   
       // UPLOUAD EXERCCE  ECHEC
     Route::get('/uploadFail','UserController@uploadFail')->name('uploadFail');

      //VOIR SON PROFIL 
      Route::get('/profil', 'UserController@profil')->name('profil');


      //VOIR SON l'aide 
      Route::get('/aide', 'UserController@aide')->name('aide');




/*
|--------------------------------------------------------------------------
| MENU DE GESTION DES INTERFACES ADMINISTRATEUR
|--------------------------------------------------------------------------
|
| Ici nous gérons les routes ADMIN
|
*/

    // liste des appreants 
     Route::get('/lAprenant','AdminController@lAprenant')->name('lAprenant');


    // TP des appreants 
     Route::get('/tpAprenant','AdminController@tpAprenant')->name('tpAprenant');

     //Contenue du tabeau
     Route::get('mytable','AdminController@mytable')->name('mytable');

     //Add formation
     Route::get('addForm','AdminController@addForm')->name('addForm');

     //Save formation
     Route::post('saveForm','AdminController@saveForm')->name('saveForm');


     //Add Module
     Route::get('addMod','AdminController@addMod')->name('addMod');

     //Save Module
     Route::post('saveMod','AdminController@saveMod')->name('saveMod');

     //Add ressources 
     Route::post('saveRessource','AdminController@saveRessource')->name('saveRessource');
     
     

     //Add tp
     Route::get('addTp','AdminController@addTp')->name('addTp');





/*
|--------------------------------------------------------------------------
| ENVOIE DE MAIL 
|--------------------------------------------------------------------------
|
| Ici nous fesons l'envoie des mails
|
*/
     //Envoie de mail de accuse de reception de l'exo
     Route::get('sendNotif','AdminController@sendNotif')->name('sendNotif');

     //Envoie de mail de correction 
     Route::get('sendObserv','AdminController@sendObserv')->name('sendObserv');
      

