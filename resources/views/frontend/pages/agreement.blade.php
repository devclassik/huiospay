@php $title=$page->title; @endphp
@php $author=$settings->company; @endphp
@php $keywords=$settings->keywords; @endphp
@php (empty($page->description))?$settings->description:$page->description; @endphp
@extends('layouts.front')
@section('content')
    <!-- merchant agreement section -->
	
	<section class="section section-job-description gradient-light--upright pt-5">
        <div class="container">
			<div class="row pb-20">
				{{-- <div class="col-md-6 mx-auto">
					<figure class="mb-6"><img src="http://localhost/scnip/huiospay/huiospay/medias/images/construction.jpg" srcset="http://localhost/scnip/huiospay/huiospay/medias/images/construction@2x.jpg 2x" alt=""></figure>
				</div> --}}
				<div class="col-12 text-center">
					<i class="fal fa-digging fa-9x text-orange" style="font-size: 200px !important; opacity: 0.1"></i>
					<h1 class="display-1 py-3 text-muted">Ooooops!</h1>
					<p class="text-muted">The resource you are looking is under construction...</p>
				</div>
			</div>
		</div>
	</section>
    {{--<section class="section section-job-description gradient-light--upright pt-5">
        <div class="container">
			<div class="row">
				<aside class="col-xl-2 sidebar doc-sidebar mt-md-0 py-16 d-none d-xl-block">
					<div class="widget pb-3">
						<h6 class="widget-title fs-17 mb-2">Usage</h6>
						<nav id="collapse-usage">
							<ul class="list-unstyled fs-sm lh-sm text-reset">
								<li><a href="{{route('pages','cookies')}}" class="{{ ($page->slug=='cookies'?'active':'')}}">Cookies Policy</a></li>
								<li><a href="{{route('pages','privacy')}}" class="{{ ($page->slug=='privacy'?'active':'')}}">Privacy Policy</a></li>
								<li><a href="{{route('pages','terms')}}" class="{{ ($page->slug=='terms'?'active':'')}}">Terms and Conditions</a></li>
								<li><a href="{{route('pages','agreement')}}" class="{{ ($page->slug=='agreement'?'active':'')}}">Merchant Service Agreement</a></li>
							</ul>
						</nav>
					</div>
				</aside>
				
				<aside class="col-xl-2 order-xl-3 sidebar sticky-sidebar mt-md-0 py-16 d-none d-xl-block">
					<div class="widget">
						<h6 class="widget-title fs-17 mb-2 ps-xl-5">{{$page->title}}</h6>
						<nav class="ps-xl-5">
							<ul class="list-unstyled fs-sm lh-sm text-reset">
								<li><a class="scroll" href="#cookies-policy-cookies">Cookies</a></li>
								<li><a class="scroll" href="#cookies-policy-google">Google Marketing Platform</a></li>
								<li><a class="scroll" href="#cookies-policy-performance">Performance Cookies</a></li>
								<li><a class="scroll" href="#cookies-policy-analytics">Analytics Cookies</a></li>
								<li><a class="scroll" href="#cookies-policy-functional">Functional Cookies</a></li>
								<li><a class="scroll" href="#cookies-policy-note">Cookies Policy Note</a></li>
							</ul>
						</nav>
					</div>
				</aside>
				<div class="col-xl-8 order-xl-2">
					<section id="cookies-policy-cookies" class="wrapper py-5">
						<h2 class="mb-5">Overview</h2>
						<div class="card">
							<div class="card-body">
								<p>Necessary cookies are essential for the healthy performance of our website infrastructure. Cookies are designed to provide effectiveness, thus, ensuring smooth performance of security features of the web infrastructure.</p> 
							</div>
						</div>
					</section>
					<section id="cookies-policy-google" class="wrapper py-5">
						<h2 class="mb-5">Google Marketing Platform</h2>
						<div class="card">
							<div class="card-body">
								<p>Advertisement cookies are used to provide visitors with relevant ads and marketing campaigns. These cookies track visitors across websites and collect information to provide customized ads in relation to user’s preference and choices.</p>
							</div>
						</div>
					</section>
					<section id="cookies-policy-performance" class="wrapper py-5">
						<h2 class="mb-5">Performance Cookies</h2>
						<div class="card">
							<div class="card-body">
								<p>Performance cookies are designed in that it helps the infrastructure understand and analyse key performances of the website, thus, ensuring general optimisation of experience for the users and visitors.
							</div>
						</div>
					</section>
					<section id="cookies-policy-analytics" class="wrapper py-5">
						<h2 class="mb-5">Google Analytics</h2>
						<div class="card">
							<div class="card-body">
								<p class="mb-0">Analytical cookies are used to understand how visitors interact with the website. These cookies help provide information on metrics the number of visitors, bounce rate, traffic source, etc</p>
							</div>
						</div>
					</section>
					<section id="cookies-policy-functional" class="wrapper py-5">
						<h2 class="mb-5">Performance Cookies</h2>
						<div class="card">
							<div class="card-body">
								<p class="mb-0">These cookies support the proper functionality of our website features which make our infrastructure user’s experience effective. These cookies are consent base for users in the category "Functional".</p>
							</div>
						</div>
					</section>
					<section id="cookies-policy-note" class="wrapper py-5 pb-15">
						<h2 class="mb-5">Cookies Policy Note</h2>
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th scope="col">Cookies</th>
											<th scope="col" style="min-width: 80px !important">Duration</th>
											<th scope="col">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Google Analytics</td>
											<td>11 Months</td>
											<td>Analytical cookies are features provided by Google which measures performance. This cookie is an audience measurement solution feature provided. These cookies are also used by Google for its own products (advertisements and performance monitoring) improvement. These cookies are entirely subject to user’s permission. </td>
										</tr>
										<tr>
											<td>Cookies for functional</td>
											<td>11 Months</td>
											<td>These cookies support the proper functionality of features which are simply consent base for users in the category "Functional".</td>
										</tr>
										<tr>
											<td>Cookies Policy</td>
											<td>11 Months</td>
											<td>These cookies are set as consent plugin and used to store whether or not user has consented to the use of cookies. It does not store any personal data.</td>
										</tr>
										<tr>
											<td>Audience Measurement Cookies</td>
											<td>11 Months</td>
											<td>These cookies subject to consent, makes it possible to establish audience monitoring, an overall monitoring of your browsing in order to identify possible malfunctions of the site in order for us to make the necessary improvements to our website and also helps in measuring the entire performance of our marketing campaigns in general. These cookies can also allow us to measure the audience of our electronic communications and to have information on the reception and opening of our mailings.</td>
										</tr>
										<tr>
											<td>Contents Personalization Cookies</td>
											<td>11 Months</td>
											<td>These cookies are used for the improvement of your experience and site performance. Features of these cookies been tested on different layout versions. These cookies also allow us to understand the users and to personalize the display of our products and our services in consideration of your preferences and the pages of our site previously visited.</td>
										</tr>
										<tr>
											<td>Content for the Personalization of Offers</td>
											<td>11 Months</td>
											<td>These cookies make it possible for personalizing the display of our products and our services in consideration of your preferences and the pages you have recently visited on our website. They also allow you to target your expectations in order to adapt the offers sent to you according to the centres of interest deduced from your browsing. Refusing or rejecting to consent to these cookies, users will have no impact on the use or on the visibility of the advertisements on our site preferences.</td>
										</tr>
										<tr>
											<td>Google Marketing Platforms</td>
											<td>11 Months</td>
											<td>
												<p>This cookie helps us to monitor the performances of our campaigns and other advert tools we use through Google platform. In general, double Click and Floodlight together allow us to monitor the effectiveness and performances of adverts and helps improve the targeting of our business propositions.</p>
												<p>Functional cookies help perform specific functionalities like sharing the content of the website on social media platforms, collect feedbacks, and other third-party features.</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>        
    </section>--}}
    <!-- end privacy policy section -->
@stop