@extends('frontend.photoafrica.pamaster')

@section('title', 'Registration | '.app_name())

@section('meta_description','Photoafrica 2018 registration form')
@section('meta_author', 'Venikbox-Iyke')
{{--@section('meta', )--}}

@section('content')
    @php
        $array = array(array('metaname' => 'color', 'metavalue' => 'black'),
                        array('metaname' => 'size', 'metavalue' => 'big'));
    @endphp
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <article class="post-single">

                        <div class="post-body">

                            <h4 class="dark-color">Make Payment</h4>
                            <p>Your pageant ID is <strong>{{$contestant->pageant_id }}</strong></p>
                            <div class="space-20"></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ $contestant->avatar_location }}" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <strong>Name: </strong>{{$contestant->first_name }} {{$contestant->last_name }} <br>
                                    <strong>Phone number: </strong>{{$contestant->phone_number }}<br>
                                    <strong>Email: </strong>{{$contestant->email }}<br>
                                    <strong>Country </strong>{{$contestant->country }}
                                    <div class="space-20"></div>

                                    <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="amount" value="{{$payment->amount }}" /> <!-- Replace the value with your transaction amount -->
                                        <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
                                        <input type="hidden" name="description" value="Photo Africa 2018 Registration" /> <!-- Replace the value with your transaction description -->
                                        <input type="hidden" name="logo" value="{{asset('appy/images/photoafrica.jpg')}}" /> <!-- Replace the value with your logo url (Optional, present in .env)-->
                                        <input type="hidden" name="title" value="Photo Africa 2018" /> <!-- Replace the value with your transaction title (Optional, present in .env) -->
                                        <input type="hidden" name="country" value="{{$payment->country_code }}" /> <!-- Replace the value with your transaction country -->
                                        <input type="hidden" name="currency" value="{{$contestant->currency }}" /> <!-- Replace the value with your transaction currency -->
                                        <input type="hidden" name="email" value="{{$contestant->email }}" /> <!-- Replace the value with your customer email -->
                                        <input type="hidden" name="firstname" value="{{$contestant->first_name }}" /> <!-- Replace the value with your customer firstname -->
                                        <input type="hidden" name="lastname" value="{{$contestant->last_name }}" /> <!-- Replace the value with your customer lastname -->
                                        <input type="hidden" name="metadata" value="{{ json_encode($array) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
                                        <input type="hidden" name="phonenumber" value="{{$contestant->phone_number }}" /> <!-- Replace the value with your customer phonenumber -->
                                        <input type="hidden" name="pay_button_text" value="Complete Payment" /> <!-- Replace the value with the payment button text you prefer -->
                                        <input type="hidden" name="ref" value="{{$contestant->pageant_id }}" /> <!-- Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. -->
                                        <button type="submit" class="bttn-default">Proceed to make payment ({{number_format($payment->amount) }} {{$payment->currency }})</button>
                                        <p>You will be redirected to a secure payment gateway to complete your payment.</p>
                                    </form>

                                </div>
                            </div>
                            <div class="space-20"></div>

                        </div>
                    </article>

                    <div class="space-20"></div>

                </div>
            </div>
        </div>
    </div>

    {{--    @include('frontend.photoafrica.includes.footer')--}}
@endsection
