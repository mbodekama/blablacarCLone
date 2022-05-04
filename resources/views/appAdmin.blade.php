@include('layouts.partialsAd.header')


{{-- Verifie si l'utilisateur n'est pas un client bloques --}}

@include('layouts.partialsAd.navbar')

    <!-- ===============================================-->
    <!--   DEBUT DU CONTAINER A RECHARGER -->
    <!-- ===============================================-->

        <div id="content" class="main-content">
            
        <span id="conteneur">
         @include('pages/back/Admin/dash')
        </span>

    	</div>
    <!-- END MAIN CONTAINER -->

    <!-- ===============================================-->
    <!--   FIN DU CONTAINER A RECHARGER -->
    <!-- ===============================================-->

@include('layouts.partialsAd.footer')
