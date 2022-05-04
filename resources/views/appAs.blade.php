@include('layouts.partialsAd.header')


{{-- Verifie si l'utilisateur n'est pas un client bloques --}}

@include('layouts.partialsAd.navbar')

    <!-- ===============================================-->
    <!--   DEBUT DU CONTAINER A RECHARGER -->
    <!-- ===============================================-->

        <div id="content" class="main-content">
            
        @if(hasRole('apprenant')) 
        <div class="card component-card_1" style="margin-right:5%; margin-left: 5%; margin-top: 2%;">
            <div class="card-body">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    @foreach(getImg() as $img)
                        <div 
                        class="@if ($loop->iteration == 1)
                                   carousel-item active
                                @else
                                 carousel-item
                                @endif">
                            <a href="{{ $img->lien }}" target="_blank">
                            <img class="d-block w-100" src="{{ asset($img->img) }}" alt="First slide">
                                <div class="carousel-caption d-none d-sm-block">
                                    <span >Voir plus... {{ $loop->iteration }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Arriere</span>
                </a>                                            
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
            </div>
        </div>
        @endif
        <span id="conteneur">
         @include('pages/back/User/dashClt')
        </span>

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- ===============================================-->
    <!--   FIN DU CONTAINER A RECHARGER -->
    <!-- ===============================================-->

@include('layouts.partialsAd.footer')
