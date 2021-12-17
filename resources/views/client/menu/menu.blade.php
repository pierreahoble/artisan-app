<!-- Main Header-->
<header class="main-header header-style-two">
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container clearfix">
            <div class="top-left">
                <div class="text">Lundi a Vendredi 8:00AM - 6:00PM</div>
            </div>

            <div class="top-right">
                <ul class="social-icon-one clearfix">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>

                <!--Search Box-->
                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                class="fa fa-search"></span></button>
                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                            <li class="panel-outer">
                                <div class="form-container">
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input type="search" name="field-name" value="" placeholder="Search Here"
                                                required>
                                            <button type="submit" class="search-btn"><span
                                                    class="fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!--Header Lower-->
    <div class="header-lower">
        <div class="auto-container">
            <div class="main-box clearfix">
                <div class="pull-left logo-outer">
                    <div class="logo mx-1"><a href="index.html"><img src="client/images/logo.png" alt="" title=""
                                style="width: 150px"></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="/">Accueil</a>  </li>
                               
                             
                              
                               
                                
                              

                                @auth
                                <li class="dropdown"><a href="#">Menus</a>
                                    <ul>
                                        <li><a href="{{ url('vos-commandes') }}"><i class="fab fa-first-order"></i> Vos commandes</a></li>
                                        <li><a href="{{ url('votre-profile') }}"> <i class="fas fa-id-badge"></i> Profil</a></li>
                                        <li><a href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </li>
                                @endauth


                                <li><a href="{{ url('nous-contacter') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->


                    @guest
                    <div class="outer-box">
                        <!-- Shoppping Car -->
                        {{-- <div class="cart-btn">
                            <a href="#"><i class="icon flaticon-shopping-cart-2"></i> <span class="count">2</span></a>
                        </div> --}}

                        <!-- Btn Box -->
                        <div class="btn-box">
                            <a href="{{ url('compte-professionel-inscription') }}" class="btn btn-danger mx-1"><span
                                    class="btn-title">Créer un compte Professionnel</span></a>
                            <a href="{{ url('register') }}" class="theme-btn "><span class="btn-title">Créer un compte
                                    client</span></a>
                        </div>
                    </div>
                    @endguest




                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="client/images/logo-small.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="nav-outer pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->


    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="client/images/logo.png" alt="" title=""></a></div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<!--End Main Header -->