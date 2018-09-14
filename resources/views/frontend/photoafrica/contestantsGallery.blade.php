@extends('frontend.photoafrica.pamaster')

@section('title', 'Gallery of Contestants | '.app_name())

@section('meta_description','Photoafrica')
@section('meta_author', 'Venikbox')
{{--@section('meta', )--}}

@section('content')
    <div class="section-padding">
        <div class="container">

            <div class="row">
                @if(count($contestants) > 0)
                    <div class="infinite-scroll">
                        @foreach($contestants as $contestant)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src="{{get_contestant_thumbnail($contestant)}}" alt="{{$contestant->first_name}} {{$contestant->last_name}}'s Avatar">
                        </figure>
                        <div class="post-body">
                            <div class="post-meta">
                                <div class="post-tags"><a href="{{route('contestant-profile', $contestant->pageant_id)}}">{{str_limit($contestant->first_name.' '.$contestant->last_name, 20)}}</a></div>
                                <div class="post-date">{{$contestant->country}}</div>
                            </div>
                            <h4 class="dark-color">{{str_limit($contestant->description, 40, '...')}}</h4>
                            <a href="{{route('contestant-profile', $contestant->pageant_id)}}" class="read-more">View Full Profile</a>
                        </div>
                    </article>
                </div>
                            @endforeach
                    </div>
                @endif

            </div>
            <div class="row">
                <div class="col-xs-12">
                    {{$contestants->links()}}
                    {{--<div class="pagination">--}}
                        {{--<div class="nav-links">--}}
                            {{--<a href="#" class="prev page-numbers"><i class="lnr lnr-chevron-left"></i></a>--}}
                            {{--<a href="#" class="page-numbers">1</a>--}}
                            {{--<span class="page-numbers current">2</span>--}}
                            {{--<a href="#" class="page-numbers">3</a>--}}
                            {{--<a href="#" class="page-numbers">4</a>--}}
                            {{--<a href="#" class="page-numbers">5</a>--}}
                            {{--<a href="#" class="page-numbers">6</a>--}}
                            {{--<a href="#" class="next page-numbers"><i class="lnr lnr-chevron-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection

{{--@push('after-scripts')--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/#.#.#/jquery.jscroll.min.js"></script>--}}
    {{--<script src="/js/jquery.jscroll.min.js"></script>--}}
    {{-- MAKE SURE THAT YOU PUT THE CORRECT PATH FOR jquery.jscroll.min.js --}}

    {{--<script type="text/javascript">--}}
        {{--$('ul.pagination').hide();--}}
        {{--$(function() {--}}
            {{--$('.infinite-scroll').jscroll({--}}
                {{--autoTrigger: true,--}}
                {{--loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />', // MAKE SURE THAT YOU PUT THE CORRECT IMG PATH--}}
                {{--padding: 0,--}}
                {{--nextSelector: '.pagination li.active + li a',--}}
                {{--contentSelector: 'div.infinite-scroll',--}}
                {{--callback: function() {--}}
                    {{--$('ul.pagination').remove();--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
    {{--@endpush--}}
