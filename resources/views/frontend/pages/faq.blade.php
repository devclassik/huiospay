@extends('layouts.front')
@section('content')

    <section class="wrapper bg-softly-primary home-hero hero-wave">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16  text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3">Frequently Asked Questions</h1>
                    <p class="lead px-lg-5 px-xxl-8">Below arw the frequently asked question</p>
                </div>
            </div>
        </div>
    </section>
    <!-- faq section -->
    <section class="page-content faqs pb-5">
		<br/><br/><div class="container header mt-lg-4 mb-5 text-center">
            <!-- <h3 class="display-4 title">Frequently Asked Questions (FAQ)</h3> -->
            <p class="sub-title"> Wesabi helps you to find reliable and skilled artisans in your neighbourhood and to manage your tasks appointments.
			This service is also available in your customer login, as well as the Wesabi App on the Google play store. We fully understand, that there might appear
			be some questions on the way to your first service appointment, and also afterwards. Therefore we hope, that the following most frequently asked question help you to overcome the final obstacles. </p>
            <hr class="bg-dark mb-4 w-25">
        </div>
		<div class="container">
            <div class="row voffset5"><!-- 2nd row -->
{{--                @if(count($faqs)==0)--}}
                <div style="padding:100px 0px">
                    <h4>Ooops! No data found at this moment, please try again.</h4>
                </div>
{{--                @endif--}}
{{--                @php $types = $faqs->groupBy('category');@endphp--}}
{{--                    @foreach($types as $category => $questions)--}}
{{--                        @php $counter=0; @endphp--}}
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- Left Col -->
                            <h4 class="py-3 font-weight-bolder">tets</h4>
                            <div id="accordion" class="accordion accordion-style">
                            <div class="accordion-item">
                                <a>hello</a>
                                <div class="content">
                                    <p>its me</p>
                                </div>
                            </div>
                                <div class="accordion-item">
                                    <a>hello</a>
                                    <div class="content">
                                        <p>its me</p>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                    @endforeach--}}
                </div>
            test
{{--                @if($page->sidebar==1)--}}
{{--                    @include('frontend.widgets.sidebar')--}}
{{--                @endif--}}
            </div>
        </div>
    </section>
    <!-- end faq section -->
@stop
