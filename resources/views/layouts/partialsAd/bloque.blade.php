<body class="maintanence text-center">
    
    <div class="container-fluid maintanence-content">
        <div class="">
            <div class="maintanence-hero-img">
                <img alt="logo" src="assets/images/logo1.png">
            </div>
            <h1 class="error-title">Utilisateur Bloqués</h1>
            <p class="error-text">Votre compte est bloqué.</p>
            <p class="text">Veuilez contacter l'équipe suport de connecticka pour avoir plus d'informations</p>
            <p class="text">CONNECTICKA - Siège social: Abidjan Rivera Palmeraie Saint Viateur SIPIM 4 05 BP 487 Abidjan 05 <br> E-mail : connecticka225@gmail.com / connecticka225@outlook.com <br> Cel : +225 89 00 40 32 / 69 33 02 99 </p>

                                <a class="btn btn-info mt-4" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> 
                                    Retour
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" 
                                    method="POST" style="display: none;">@csrf
                                  </form>
        </div>
    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/pages_maintenence.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2020 21:56:48 GMT -->
</html>