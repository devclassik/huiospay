@php $title=$page->title; @endphp
@php $author=$settings->company; @endphp
@php $keywords=$settings->keywords; @endphp
@php $description=(empty($page->description))?$settings->description:$page->description; @endphp
@extends('layouts.front')
@section('content')
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
                @if(count($faqs)==0)
                <div style="padding:100px 0px">
                    <h4>Ooops! No data found at this moment, please try again.</h4>
                </div>
                @endif
                @php $types = $faqs->groupBy('category');@endphp 
                    @foreach($types as $category => $questions)
                        @php $counter=0; @endphp
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- Left Col -->
                            <h4 class="py-3 font-weight-bolder">{{ucfirst($category)}}</h4>
                            <div id="accordion" class="accordion accordion-style">
                            @foreach($questions as $faq)
                            @php $counter++; @endphp                            
                            <div class="accordion-item">
                                <a>{!!$faq->question!!}</a>
                                <div class="content">
                                    <p>{!!$faq->answer!!}</p>
                                </div>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    @endforeach   
                </div>
                @if($page->sidebar==1)
                    @include('frontend.widgets.sidebar')
                @endif
            </div>
        </div>
    </section>
    <!-- end faq section -->
@stop