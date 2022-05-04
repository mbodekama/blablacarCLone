@include('layouts.partials.header')


@include('layouts.partials.navbar')

    <!-- ===============================================-->
    <!--   DEBUT DU CONTAINER A RECHARGER -->
    <!-- ===============================================-->

<div id="main_content">
         {{-- @include('pages.principale.employe.ajouterEmploye')  --}}
         @include('layouts.partials.content')

</div>


    <!-- ===============================================-->
    <!--   FIN DU CONTAINER A RECHARGER -->
    <!-- ===============================================-->

@include('layouts.partials.footer')
