@extends('frontend.photoafrica.pamaster')

@section('title', 'Home | '.app_name())

@section('meta_description','Photoafrica home')
@section('meta_author', 'Venikbox')
{{--@section('meta', )--}}

@section('content')
    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12">
                    <figure class="mobile-imagee wow fadeInUp" data-wow-delay="0.2s">
                        <img id="home-img" src="{{asset('appy/images/photoafrica-logo.png')}}" alt="" style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);" class="swing animated img-responsive center-block">
                    </figure>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-sm"></div>
                    <h3 class="wow fadeInUp" data-wow-delay="0.4s"><strong>WELCOME TO PHOTO AFRICA 2018</strong></h3>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>An online international photo contest open for both males and females, cutting across Nigeria, Ghana and South Africa</p>
                        <p><strong>What is your magic?</strong></p>
                    </div>
                    <div class="space-20"></div>
                    <a href="{{route('contest-registration')}}" class="bttn-black wow fadeInUp" data-wow-delay="0.8s"><i class="lnr lnr-user"></i> Register Now</a>
                </div>
            </div>
            {{--<div style="margin-bottom: 100px"></div>--}}
        </div>
    </header>
    <!-- Home-Area-End -->
@endsection

{{--@push('after-scripts')--}}
    {{--<script>--}}
    {{--$(document).ready(function() {--}}
        {{--$('#home-img').hover(function(){--}}
            {{--addClass('animated');--}}
        {{--});--}}
    {{--});--}}
    {{--</script>--}}
    {{--@endpush--}}