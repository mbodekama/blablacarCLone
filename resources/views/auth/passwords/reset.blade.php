<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/auth_login_boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2020 21:56:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> {{ env("APP_NAME") }} | {{ __('Login') }} </title>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="assetAdmin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assetAdmin/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assetAdmin/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assetAdmin/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assetAdmin/assets/css/forms/switches.css">
</head>
<body class="form">
    

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <img src="assetAdmin/assets/img/boy-2.png" alt="avatar">
                        <h1 class="">APP EXCEL CASIMIR</h1>
                        <p class="signup-link recovery">
                            Pour l'insertion automatiser des données
                        </p>
                        <form class="text-left"  method="POST" action="{{ route('login') }}">
                            <div class="form">
                                @csrf
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                        <label for="email">Email</label>
                                 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="email">Password</label>
                                       <!--  <a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a> -->
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                      
                                        <button type="submit" class="btn btn-primary" value="" name="submit">
                                            Se connecter
                                        </button>
                                    </div>
                                </div>



                                <p class="signup-link">Mot de pass Oublié <a href="/login">Consulter le webmaster au 77 71 80 83 / 53 80 80 65 </a></p>

                            </div>
                        </form>

                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assetAdmin/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assetAdmin/bootstrap/js/popper.min.js"></script>
    <script src="assetAdmin/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assetAdmin/assets/js/authentication/form-2.js"></script>

</body>


</html>