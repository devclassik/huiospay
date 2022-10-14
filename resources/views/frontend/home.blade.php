
	@extends('layouts.front')
	@section('content')
        @include('sweetalert::alert')
		<section class="wrapper bg-light home-hero hero-wave">
			<div class="container pt-18 pb-10" style="z-index: 5; position:relative">
				<div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
					<div class="col-md-10 offset-md-1 offset-lg-0 col-lg-7 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
						<h1 class="display-2 mb-5">Modern payments solutions for Africa.</h1>
						<p class="lead fs-20 lh-sm mb-7 px-md-10 px-lg-0">A flexible payment solution that support every stage of your growth.</p>
						<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
							<span><a href="/setupAccount" class="btn btn-primary rounded-pill mb-0 text-nowrap me-2">Setup your Business</a></span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="wrapper bg-light">
			<div class="container py-7 py-md-10">
				<div class="row text-center">
					<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
						<h2 class="fs-15 text-uppercase text-primary mb-3">Seamless Payment Experiences?</h2>
						<h3 class="display-4 mb-10 px-xl-10">Make payment the best part of transacting with you!</h3>
					</div>
					<div class="col-lg-10 mx-auto pb-10">
						<div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp" data-group="process" data-disabled="true">
							<div class="col-md-4" data-cue="slideInUp" data-group="process" data-show="true" style="animation-name: slideInUp; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"> <img src="{{asset('medias/images/icons/shield.svg')}}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="">
								<h4 class="mb-1">1. Secure Transactions</h4>
								<p>We provide cutting-edge innovative infrastructures aimed at creating infinite possibilities of secure transactions.</p>
							</div>
							<div class="col-md-4" data-cue="slideInUp" data-group="process" data-show="true" style="animation-name: slideInUp; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;"> <img src="{{asset('medias/images/icons/savings.svg')}}" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="">
								<h4 class="mb-1">2. Reporting</h4>
								<p>HuiosPay simplify your bookkeeping processes and help maximise your output for efficiency to help reach your zenith.</p>
							</div>
							<div class="col-md-4" data-cue="slideInUp" data-group="process" data-show="true" style="animation-name: slideInUp; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;"> <img src="{{asset('medias/images/icons/loading.svg')}}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="">
								<h4 class="mb-1">3. 99.9% Success Rates</h4>
								<p>Enjoy streamlined and seamless transaction experience with highly competitive and phenomenal success rate on HuiosPay.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-18">
					<div class="col-md-8 col-lg-6 position-relative light-gallery-wrapper">
						<!-- <a href="https://vimeo.com/374265101" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 lightbox position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i class="icn-caret-right"></i></a> -->
						<!-- <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
						<figure class="rounded"><img src="{{asset('medias/images/payment-options.gif')}}" srcset="{{asset('medias/images/payment-options.gif')}}" alt=""></figure> -->
						<figure class="rounded">

							<lottie-player src="{{asset('medias/images/animation/mobile-payment.json')}}"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
						</figure>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<h2 class="fs-15 text-uppercase text-primary mb-3">WHAT WE DO?</h2>
						<h3 class="display-4 mb-6">Accept payments from multiple channels.</h3>
						<p class="mb-6">Our goal is to expose your business to an endless possibilities of modern, frictionless and painless payments. Our ongoing commitment to efficiency manifests in our ability to provide a wide variety of payment options for your business needs.</p>
						<div class="row gy-3 gx-xl-8">
							<div class="col-xl-6">
								<ul class="icon-list bullet-bg bullet-soft-primary mb-0">
									<li><span><i class="uil uil-check"></i></span><span> Debit and Credit Cards</span></li>
									<li class="mt-3"><span><i class="uil uil-check"></i></span><span> Mobile Money</span></li>
									<li class="mt-3"><span><i class="uil uil-check"></i></span><span>  Bank Transfer</span></li>
								</ul>
							</div>
							<div class="col-xl-6">
								<ul class="icon-list bullet-bg bullet-soft-primary mb-0">
									<li><span><i class="uil uil-check"></i></span><span>POS</span></li>
									<li class="mt-3"><span><i class="uil uil-check"></i></span><span>USSD</span></li>
									<li class="mt-3"><span><i class="uil uil-check"></i></span><span>Visa QR</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- company fact-->
		<!-- <section class="wrapper bg-soft-primary">
			<div class="container py-14 pt-md-17 pb-md-21">
				<div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-2 align-items-end">
					<div class="col-lg-4">
						<h2 class="fs-16 text-uppercase text-line text-primary mb-3">Company Facts</h2>
						<h3 class="display-4 mb-0 pe-xxl-15">We are proud of our works</h3>
					</div>
					<div class="col-lg-8 mt-lg-2">
						<div class="row align-items-center counter-wrapper gy-6 text-center">
							<div class="col-md-4">
								<h3 class="counter counter-lg">1000+</h3>
								<p>Completed Projects</p>
							</div>
							<div class="col-md-4">
								<h3 class="counter counter-lg">500+</h3>
								<p>Happy Clients</p>
							</div>
							<div class="col-md-4">
								<h3 class="counter counter-lg">150+</h3>
								<p>Awards Won</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- end of comapny Fact-->

	<!-- WHY US SECTON -->
	<section class="wrapper bg-soft-primary">
			<div class="container pb-5 pb-md-8">
				<div class="row">
					<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
						<h2 class="fs-15 text-uppercase text-primary mb-3">Why Us?</h2>
						<h3 class="display-4 mb-10 px-xl-10">Find out why we are the preferred payment platform in Africa!</h3>
					</div>
				</div>
				<div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-5 mb-md-8">
					<div class="col-md-8 col-lg-6 position-relative light-gallery-wrapper">
						<a href="https://vimeo.com/374265101" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 lightbox position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i class="icn-caret-right"></i></a>
						<div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
						<figure class="rounded bordered-surface"><img src="{{asset('medias/images/about12.jpg')}}" srcset="{{asset('medias/images/about12.jpg')}}" alt=""></figure>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="card me-lg-6">
							<div class="card-body p-6">
								<div class="d-flex flex-row">
									<div>
										<span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">01</span></span>
									</div>
									<div>
										<h4 class="mb-1">Security</h4>
										<p class="mb-0">Our platform is designed to provide end-to-end protect against fraud and suspicious activities.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card ms-lg-11 mt-6">
							<div class="card-body py-6 px-3">
								<div class="d-flex flex-row">
									<div>
										<span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">02</span></span>
									</div>
									<div>
										<h4 class="mb-1">Fast Settlement</h4>
										<p class="mb-0">We ensure the fastest remittance window to your approved account within 24 hours.</p>
									</div>
								</div>
							</div>
						</div>
							<div class="card mx-lg-5 mt-6">
								<div class="card-body p-6">
									<div class="d-flex flex-row">
									<div>
										<span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">03</span></span>
									</div>
									<div>
										<h4 class="mb-1">Dispute Resolution</h4>
										<p class="mb-0">Claims and disputes are resolved within the shortest possible time.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="wrapper bg-light">
			<div class="container">
				<div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-18">
					<div class="col-lg-5 offset-lg-1">
						<h2 class="fs-15 text-uppercase text-primary mb-3">Get on HuiosPay Safe Train</h2>
						<h3 class="display-4 mb-6">Integrate HuiosPay APIs and start Collecting</h3>
						<p class="mb-6">Our APIs has been developed with Developers in mind; well-documented APIs that let you to build every features within the shortest period of time. If you can imagine it, you can build it with HuiosPay.</p>
						<div class="row gy-3 gx-xl-8">
							<div class="col-xl-12">
								<ul class="icon-list bullet-bg bullet-soft-primary mb-0">
									<li><span><i class="uil uil-check"></i></span><span>Collect one-time and recurring payments from your app or website.</span></li>
									<li class="mt-3"><span><i class="uil uil-check"></i></span><span>Make instant transfers.</span></li>
								</ul>
							</div>
							<div class="col-xl-12">
								<ul class="icon-list bullet-bg bullet-soft-primary mb-0">
									<li><span><i class="uil uil-check"></i></span><span>Retrieve all your transactions and customer data.</span></li>
									<li class="mt-3"><span><i class="uil uil-check"></i></span><span>Verify the identity of customers.</span></li>
								</ul>
							</div>
							<div class="col-xl-12 py-5">
								<a href="#" class="more hover">Coming Soon</a>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-lg-6 position-relative light-gallery-wrapper">
						<figure class="rounded"><img src="{{asset('medias/images/api-integration.png')}}" srcset="{{asset('medias/images/api-integration.png')}}" alt=""></figure>
					</div>
				</div>
			</div>
		</section>
	<!-- WHY US SECTON -->


	@stop
