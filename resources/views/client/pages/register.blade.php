<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/bold_touch/fixomiz/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 14:27:22 GMT -->
<head>
<meta charset="utf-8">
<title>Artisan | Login</title>
<!-- Stylesheets -->
<link href="{{ asset('client/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('client/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('client/css/responsive.css') }}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{ asset('client/css/color-switcher-design.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="client/images/favicon.png" type="image/x-icon">
<link rel="icon" href="client/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    @include('client.menu.menu')
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(client/images/background/3.jpg)">
        <div class="auto-container">
            <h2>Login</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">Accueil</a></li>
                <li>Login</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <div class="column col-lg-12 col-md-6 col-sm-12">
                    
                    <!-- Register Form -->
                    <div class="login-form register-form">
                        <h2>S'enregistrer</h2>
                        <!--Login Form-->
                        <form method="post" action="{{ url('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Votre Nom</label>
                                <input type="text" name="nom" placeholder="Votre Nom" required>
                            </div>

                            <div class="form-group">
                                <label>Votre Prénom</label>
                                <input type="text" name="prenom" placeholder="Votre Prénom" required>
                            </div>

                            <div class="form-group">
                                <label>Votre Numéro De Téléphone</label>
                                <input type="text" name="tel" placeholder="Votre Numéro De Téléphone" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Entrer Votre Mot de Passe</label>
                                <input type="password" name="password" placeholder="Entrer Votre Mot de Passe" required>
                            </div>

                            <div class="form-group">
                                <label>Confirmer Votre Mot de Passe</label>
                                <input type="password" name="password_confirme" placeholder="Confirmer Votre Mot de Passe" required>
                            </div>
                            
                            
                            <div class="form-group text-right">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Register</span></button>
                            </div>
                        </form>    
                        <div class="form-group pass">
                            {{-- <a  href="{{ url('login') }}" class="psw">Se connecter</a> --}}
                            <a class="offset-2" href="{{ url('login') }}" class="psw">Mot de Passe oublié?</a>
                        </div>  
                    </div>
                    <!--End Register Form -->
                </div>
            </div>
        </div>
    </section>
    <!--End Login Section-->

   

    <!--Main Footer-->
   @include('client.menu.footer')
    <!--End Main Footer-->

</div><!-- Page Wrapper -->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="inner-palate">
        <div class="color-trigger"><i class="fa fa-cog"></i></div>
        <div class="color-palate-head"><h5>GET AN AWESOME START!</h5></div>
        <div class="lower-options">
            <h6>RTL Supported</h6>
            <ul class="rtl-version option-box"> <li class="active">LTR</li> <li class="rtl">RTL</li> </ul>
            <h6>Box &amp; Wide layout</h6>
            <ul class="box-version option-box"> <li class="active">Wide</li> <li class="box">Boxed</li> </ul>
            <div class="box-mode-bg">
                <h6>Boxed Mode Backgrounds</h6>
                <ul class="clearfix"> 
                    <li class="active" style="background-image: url(images/background/boxed-bg/1.png);"></li>
                    <li style="background-image: url(images/background/boxed-bg/2.png);"></li>
                    <li style="background-image: url(images/background/boxed-bg/3.png);"></li>
                    <li style="background-image: url(images/background/boxed-bg/4.png);"></li>
                    <li style="background-image: url(images/background/boxed-bg/5.png);"></li>
                    <li style="background-image: url(images/background/boxed-bg/6.png);"></li>
                    <li style="background-image: url(images/background/boxed-bg/7.png);"></li>
                    <li style="background-image: url(images/background/boxed-bg/8.png);"></li>
                </ul>
            </div>
            <div class="palate-foo">
                <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
            </div>
            <a href="#" class="purchase-btn">Purchase now</a>
        </div>
    </div>
</div><!-- End Color Switcher -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="{{ asset('client/js/jquery.js')}}"></script> 
<script src="{{ asset('client/js/popper.min.js')}}"></script>
<script src="{{ asset('client/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('client/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('client/js/owl.js')}}"></script>
<script src="{{ asset('client/js/wow.js')}}"></script>
<script src="{{ asset('client/js/appear.js')}}"></script>
<script src="{{ asset('client/js/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{ asset('client/js/jquery.modal.min.js')}}"></script>
<script src="{{ asset('client/js/script.js')}}"></script>
<!-- Color Setting -->
<script src="{{ asset('client/js/color-settings.js')}}"></script>
</body>

<!-- Mirrored from ary-themes.com/html/bold_touch/fixomiz/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 14:27:22 GMT -->
</html>