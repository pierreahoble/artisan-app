@extends('base')



@section('contenu')



<!-- Banner section -->
<section class="banner-section-two">
    <div class="anim-icons">
        <span class="icon icon-cogs-2 wow zoomIn"></span>
    </div>

    <div class="auto-container">
        <div class="content-box">
            <span class="title">Best Carfixing Services Provider</span>
            <h1> Auto Repair &amp; <span>Maintenance</span></h1>
            <div class="text">We provide always our best equestrian training for our clients</div>
            <div class="btn-box"><a href="services.html" class="theme-btn btn-style-one"><span class="btn-title">Check
                        Service</span></a></div>
        </div>
    </div>

    <div class="images-outer">
        <figure class="speaker-img"><img src="client/images/main-slider/image-4.png" alt=""></figure>
    </div>
</section>
<!--End Banner section -->










<div class="mb-5">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Our Blog-->
            <div class="content-side col-xl-12 col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">
                    <div class="content-box">

                        <h3 class="offset-2">Liste de vos commandes</h3>
                        <!--Product Info Tabs-->
                        <div class="product-info-tabs">
                            <!--Product Tabs-->
                            <div class="prod-tabs tabs-box">
                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-spec" class="tab-btn active-btn">Liste des commandes en cours</li>
                                    <li data-tab="#prod-reviews" class="tab-btn">Liste des commandes validés</li>
                                    <li data-tab="#prod-details" class="tab-btn">Liste de tous les commandes </li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab" id="prod-details" style="display: none;">
                                        <div class="content">

                                            <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Handle</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td colspan="2">Larry the Bird</td>
                                                    <td>@twitter</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                           
                                        </div>
                                    </div>

                                    <!--Tab -->
                                    <div class="tab active-tab animated fadeIn" id="prod-spec" style="display: block;">
                                        <div class="content">

                                            <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Handle</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td colspan="2">Larry the Bird</td>
                                                    <td>@twitter</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                           

                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="prod-reviews" style="display: none;">
                                        <div class="content">

                                            <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Handle</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td colspan="2">Larry the Bird</td>
                                                    <td>@twitter</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>












@endsection