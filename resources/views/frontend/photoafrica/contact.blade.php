@extends('frontend.photoafrica.pamaster')

@section('title', 'Contact | '.app_name())

@section('meta_description','Photoafrica')
@section('meta_author', 'Venikbox - Iyke +2348184496562')
{{--@section('meta', )--}}

@section('content')

    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Contact Us</h5>
                            <h3 class="dark-color">We would love to hear from you!</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>20, Mobolaji Bank Anthony Way, Maryland <br />opposite Kingsway Bus stop, Ikeja Lagos, Nigeria</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p><a href="tel:+2347032027660">+2347032027660</a> <br />
                                <a href="tel:+2347018706882">+2347018706882</a> <br />
                                <a href="tel:+233266795105">+233266795105</a> <br />
                                <a href="tel:+27784161235">+27784161235</a> </p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p><a href="mailto:inquiries@photoafrica.com.ng">inquiries@photoafrica.com.ng</a> <br /> <a href="mailto:info@photoafrica.com.ng">info@photoafrica.com.ng</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer-Area-End -->
@endsection
