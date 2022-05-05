$(function()
{


var loader = $('#loader').html();
loader +=loader;

 
   /*
  |--------------------------------------------------------------------------
  | MENU DE GESTION DES INTERFACES FONCTIONNELLES CLIENTS
  |--------------------------------------------------------------------------
  |
  | Ici nous gérons les routes du menu
  |
  */

        /*--------- --------------------
            GESTION DES MENU CLIENTS
        --------------------------------*/
       /*Profile*/
         //Infos
          $("#dashClt").click(function(){

            $("#conteneur").load('/dashClt');

          });

      // liste depot
          $("#depot").click(function(){

            $("#conteneur").html(loader);
            hideSideBar();

            $("#conteneur").load('/depot');
          });

      // liste profil
          $("#profil").click(function(){
            $("#conteneur").html(loader);
            hideSideBar();
            $("#conteneur").load('/profil');
          });

      // liste aide
          $("#aide").click(function(){

            $("#conteneur").html(loader);
              hideSideBar()
            $("#conteneur").load('/aide');
          });





    //ROUTE DE L'ADMINISTRATEUR


    //TP DES APRENANTS  
      $('#tpAprenant').click(function()
      {
            $("#conteneur").html(loader);
              hideSideBar()
            $("#conteneur").load('/tpAprenant');  
      })
      

    //Liste des apprenants
      $('#lAprenant').click(function()
      {
            $("#conteneur").html(loader);
              hideSideBar()
            $("#conteneur").load('/lAprenant');  
      })

    //Liste des apprenants
      $('#addForm').click(function()
      {
            $("#conteneur").html(loader);
              hideSideBar()
            $("#conteneur").load('/addForm');  
      })

    //Liste des apprenants
      $('#addMod').click(function()
      {
            $("#conteneur").html(loader);
              hideSideBar()
            $("#conteneur").load('/addMod');  
      })

    //Liste des apprenants
      $('#addTp').click(function()
      {
            $("#conteneur").html(loader);
              hideSideBar()
            $("#conteneur").load('/addTp');  
      })




      function hideSideBar() {
        if(screen.width < 1000)
        {
          $('.sidebarCollapse').click();
        }

      }
});

