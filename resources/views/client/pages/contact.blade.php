@extends('base')




@section('contenu')


<section class="contact-section-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="sec-title text-center">
                <h2>Nous Contacter</h2>
                <span class="devider"><span></span></span>
                <div class="text">
                    Vous serrz servit dans un delai de 24h
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-two">
                <form method="post" action="#" id="contact-form" novalidate="novalidate">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Nom" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Numéro De Téléphone" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Adresse Email" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Sujet" required="">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span
                                    class="btn-title">Envoie Message</span></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="contact-info-outer">
                <ul class="contact-info clearfix">
                    <li>
                        <span class="icon fa fa-map-marker-alt"></span>
                        <p><strong>32, Breaking Street,</strong></p>
                        <p>2nd cros, Newyork ,USA 10002</p>
                    </li>

                    <li>
                        <span class="icon fa fa-phone"></span>
                        <p><strong>Appllez Nous</strong></p>
                        <p><a href="tel:0913456789">(091) 234 5678</a></p>
                    </li>

                    <li>
                        <span class="icon fa fa-envelope"></span>
                        <p><strong>Notre Support Email</strong></p>
                        <p><a href="mailto:support@example.com">Support@example.com</a></p>
                    </li>

                    <li>
                        <span class="icon fa fa-clock"></span>
                        <p><strong>Heure d'ouverture</strong></p>
                        <p>Mon - Sat: 09.00am to 09.00pm</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>




@endsection


@section('script')
<script src="{{ asset('client/js/validate.js') }}"></script>
<script src="{{ asset('client/js/script.js')}}"></script>
{{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw&amp;ver=5.2.4">
</script> --}}
{{-- <script src="{{ asset('client/js/map-script.js') }}"></script> --}}

@endsection