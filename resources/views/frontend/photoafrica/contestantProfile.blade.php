@extends('frontend.photoafrica.pamaster')

@section('title', $contestant->first_name.' from '.$contestant->country. ' - Contestant Profile | '.app_name())

@section('meta_description','Photoafrica home')
@section('meta_author', 'Venikbox')
{{--@section('meta', )--}}

@section('content')
    <!-- Video-Area -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5">
                    <img src="{{$contestant->avatar_location }}" class="img-fluid">
                </div>
                <div class="col-xs-12 col-md-5">
                    <div class="space-60 hidden visible-xs"></div>
                    <div class="page-title">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">PROFILE</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">{{$contestant->first_name }} {{$contestant->last_name }} (0 votes)</h3>
                        <div class="space-10"></div>
                        <strong>Country: </strong> {{$contestant->country }}
                        <div class="space-10"></div>
                        <strong>Hobbies: </strong> {{$contestant->hobbies }}
                        <div class="space-10"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p><strong>{{$contestant->first_name }}'s magic: </strong>{{$contestant->description }}</p>
                        </div>
                        <div class="space-50"></div>
                        <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Vote</a>
                        <a href="#" class="bttn-white wow fadeInUp pull-right" data-wow-delay="0.8s"><i class="lnr lnr-bullhorn"></i> Share</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video-Area-End -->
@endsection
