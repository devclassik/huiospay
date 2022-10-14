@php $title=$page->title; @endphp
@php $author=$settings->company; @endphp
@php $keywords=$settings->keywords; @endphp
@php $description=(empty($page->description))?$settings->description:$page->description; @endphp
@extends('layouts.front')
@section('content')
    <!-- virtual template section -->
    <section class="section section-job-list gradient-light--lean-left pt-5">
        <div class="container pb-5">
            <figure class="figure highlight-background highlight-background--lean-left">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1439px" height="480px">
                    <defs>
                    <lineargradient id="PSgrad_1" x1="42.262%" x2="0%" y1="90.631%" y2="0%">
                        <stop offset="28%" stop-color="rgb(245,246,252)" stop-opacity="1"></stop>
                        <stop offset="100%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                    </lineargradient>
                    </defs>
                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M863.247,-271.203 L-345.788,-427.818 L760.770,642.200 L1969.805,798.815 L863.247,-271.203 Z"></path>
                    <path fill="url(#PSgrad_1)" d="M863.247,-271.203 L-345.788,-427.818 L760.770,642.200 L1969.805,798.815 L863.247,-271.203 Z"></path>
                </svg>
            </figure>
            <div class="row my-3 pb-5">
                <div class="{{($page->sidebar==1)?'col-md-7':'col-md-12'}} order-md-1">
                    {!! $page->content !!}
                </div>
                @if($page->sidebar==1)
                    @include('frontend.widgets.sidebar')
                @endif
            </div>
        </div>
    </section>    
@stop