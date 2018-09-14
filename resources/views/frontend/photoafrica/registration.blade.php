@extends('frontend.photoafrica.pamaster')

@section('title', 'Registration | '.app_name())

@section('meta_description','Photoafrica 2018 registration form')
@section('meta_author', 'Venikbox-Iyke')
{{--@section('meta', )--}}

@section('content')
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <article class="post-single">
                        {{--<figure class="post-media">--}}
                            {{--<img src="{{asset('appy/images/sticky-image.jpg')}}" alt="">--}}
                        {{--</figure>--}}
                        <div class="post-body">

                            <h4 class="dark-color">Registration</h4>
                            <p>Be the next Photo Africa Winner</p>
                            <div class="space-20"></div>
                            <h4>QUALIFICATIONS OF INTERNATIONAL DELEGATES:</h4>
                            <div class="space-10"></div>
                            <ul>
                                <li>12-40 years of age</li>
                                <li>Possess beauty of face and proportionate body structure</li>
                                <li>Outgoing and friendly</li>
                                <li>Excellent physical condition</li>
                                <li>Has knowledge of her country's culture and environment</li>
                            </ul>
                            <div class="space-20"></div>

                        </div>
                    </article>

                    <div class="space-20"></div>
                    <div id="comments" class="comments-area">
                        <div class="comment-respond">
                            <h4>Registration Form</h4>
                            <form action="{{route('process-registration')}}" method="POST" enctype="multipart/form-data" class="comment-form">
                                {{csrf_field()}}
                                <div class="form-double">
                                    <div class="box">
                                        <input type="text" class="form-control" required value="{{old('first_name')}}" name="first_name" placeholder="First Name">
                                        <div class="space-30"></div>
                                    </div>
                                    <div class="box last">
                                        <input type="text" class="form-control" required value="{{old('last_name')}}" name="last_name" placeholder="Last Name">
                                        <div class="space-30"></div>
                                    </div>
                                </div>
                                <div class="form-double">
                                    <div class="box">
                                        <input type="text" class="form-control" required value="{{old('phone_number')}}" name="phone_number" placeholder="Phone Number {Intl. Format)">
                                        <div class="space-30"></div>
                                    </div>
                                    <div class="box last">
                                        <input type="email" class="form-control" required value="{{old('email')}}" name="email" placeholder="Email">
                                        <div class="space-30"></div>
                                    </div>
                                </div>
                                <div class="form-double">
                                    <div class="box">
                                        <input type="text" class="form-control" required value="{{old('occupation')}}" name="occupation" placeholder="Occupation">
                                        <div class="space-30"></div>
                                    </div>
                                    <div class="box last">
                                        <input type="text" class="form-control" required value="{{old('hobbies')}}" name="hobbies" placeholder="Hobbies">
                                        <div class="space-30"></div>
                                    </div>
                                </div>
                                <div class="form-double">
                                    <div class="box">
                                        <select class="form-control" required name="country" >
                                            <option disabled selected>Country</option>
                                            <option>Nigeria</option>
                                            <option>Ghana</option>
                                            <option>South Africa</option>
                                        </select>
                                        <div class="space-30"></div>
                                    </div>
                                    <div class="box last">
                                        <input type="text" class="form-control" required value="{{old('city')}}" name="city" placeholder="City">
                                        <div class="space-30"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                <p>Upload your photograph</p>
                                    </div>
                                </div>
                                <input type="file" onchange="readURL(this);" class="form-control" required name="photograph" placeholder="Upload your photograph" accept="image/*">
                                <div class="space-10"></div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <img id="uploaded-image" src="http://lorempixel.com/300/300/" class="img-responsive" alt="your photo" />
                                    </div>
                                </div>
                                <div class="space-30"></div>
                                <textarea name="description" id="description" rows="5" class="form-control" placeholder="What is your selling point? (Your Magic)">{{old('description')}}</textarea>
                                <div class="space-30"></div>
                                <button type="submit" class="bttn-default">Proceed</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    @include('frontend.photoafrica.includes.footer')--}}
@endsection

@push('after-scripts')
    <script src="{{asset('appy/js/img.preview.js')}}"></script>
    @endpush
