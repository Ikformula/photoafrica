@extends('frontend.photoafrica.pamaster')

@section('title', 'Registration | '.app_name())

@section('meta_description','About Photoafrica')
@section('meta_author', 'Venikbox')
{{--@section('meta', )--}}

@section('content')

    <!-- About-Area -->
    <section class="section-padding" id="about_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="{{asset('appy/images/photoafrica.jpg')}}" alt="PhotoAfrica Logo">
                        <div class="space-20"></div>
                        <h5 class="title">About Photo Africa</h5>
                        <div class="space-30"></div>
                        <h4 class="blue-color">Venikbox Entertainment, Organizer of Photo Africa presents to you the world's largest Online Photo Contest. Where models and aspiraing models would be discovered among countries and promoted into the world at large.</h4>
                        <div class="space-20"></div>
                        <p>Photo Africa is an Online Beauty Pageant, that cuts across Nigeria, Ghana and South Africa and is open to both males and females; a stage that showcases beauty, restoring unity, peace and love among models and non models, be they plus or slim sized around the globe and is organized to showcase poise and to promote multiculturalism among nations.</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area-End -->

@endsection
