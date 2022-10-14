@extends('layouts.front')
@section('content')
	<section class="wrapper bg-softly-primary home-hero hero-wave">
		<div class="container pt-10 pb-12 pt-md-14 pb-md-16  text-center">
			<div class="row">
				<div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
					<h1 class="display-1 mb-3">A new era of payment evolution in Africa</h1>
					<p class="lead px-lg-5 px-xxl-8">A flexible, modern and secure payment collection platform in Nigeria.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="wrapper bg-white">
		<div class="container py-14 py-md-16">
			<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
				<div class="col-lg-6 position-relative order-lg-2">
					<div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
					<div class="overlap-grid overlap-grid-2">
						<div class="item">
							<figure class="rounded shadow"><img src="{{asset('medias/images/payment-methods.png')}}" srcset="{{asset('medias/images/payment-methods.png')}} 2x" alt=""></figure>
						</div>
						<div class="item">
							<figure class="rounded shadow"><img src="{{asset('medias/images/payment-methods.png')}}" srcset="{{asset('medias/images/payment-methods.png')}} 2x" alt=""></figure>
						</div>
					</div>
				</div>
				<!--/column -->
				<div class="col-lg-6">
					<h2 class="display-4 mb-3">Who we Are</h2>
					<p class="lead fs-lg">A flexible payment solution that support every stage of your growth.</p>
					<p class="mb-6">HuiosPay was born out of a desire to streamline online and offline payment services closely allied with the emphasis on excellent customer service, provided by direct partnerships with world class platform providers.</p>
					
					<p class="mb-6"><b></i>With HuiosPay platform, you can:</i></b></p>
					<div class="row gy-3 gx-xl-8">
						<div class="col-xl-6">
							<ul class="icon-list bullet-bg bullet-soft-primary mb-0">
								<li><span><i class="uil uil-check"></i></span><span>Pay Electricity Bills</span></li>
								<li class="mt-3"><span><i class="uil uil-check"></i></span><span>Mobile Phone Topups</span></li>
								<li class="mt-3"><span><i class="uil uil-check"></i></span><span>Internet Subcription</span></li>
								<li class="mt-3"><span><i class="uil uil-check"></i></span><span>Cable TV Subscription</span></li>
							</ul>
						</div>
						<div class="col-xl-6">
							<ul class="icon-list bullet-bg bullet-soft-primary mb-0">
								<li><span><i class="uil uil-check"></i></span><span>Send Invoice</span></li>
								<li><span><i class="uil uil-check"></i></span><span>Buy items</span></li>
								<li class="mt-3"><span><i class="uil uil-check"></i></span><span>Securely Receive Payments</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-10 col-xl-10 col-xxl-8 mx-auto text-center">
					<h3 class="display-4 mb-4 px-lg-14 font-weight-light">Find out why we are the preferred payment platform in Africa!</h3>
				</div>
			</div>
			<div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
				<div class="col-lg-6 order-lg-2">
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
					<div class="card ms-lg-13 mt-6">
						<div class="card-body p-6">
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
					<div class="card mx-lg-6 mt-6">
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
				<div class="col-lg-6">
					<p class="">At HuiosPay, our focus is to provide and deliver excellent service making sure that merchants and customers are happy when making payments via our platforms and channels. That means customers can make payments and top-up with ease across all our terminals.</p>
					<div class="accordion accordion-wrapper" id="accordion-serve">
						<h2 class="display-6 mb-3">The People we Serve?</h2>
						<div class="card plain accordion-item">
							<div class="card-header" id="heading-entrepreneurs">
								<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse-entrepreneurs" aria-expanded="true" aria-controls="collapse-entrepreneurs"> For Entrepreneurs </button>
							</div>
							<div id="collapse-entrepreneurs" class="accordion-collapse collapse show" aria-labelledby="heading-entrepreneurs" data-bs-parent="#accordion-serve">
								<div class="card-body">
									<p>HuiosPay provides a flexible payment platform uniquely suited to simplify the process of transactions and is tailored to a variety of industries and business models. With a continued focus on excellent service, the goal remains to ensure maximum user satisfaction when conducting transactions via our payment platforms and channels.</p>
								</div>
							</div>
						</div>
						<div class="card plain accordion-item">
							<div class="card-header" id="heading-corporate">
								<button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-corporate" aria-expanded="false" aria-controls="collapse-corporate"> For Corporations </button>
							</div>
							<div id="collapse-corporate" class="accordion-collapse collapse" aria-labelledby="heading-corporate" data-bs-parent="#accordion-serve">
								<div class="card-body">
									<p>HuiosPay is determined to remain synonymous with excellent customer service, with user satisfaction remaining a priority when utilising our channels and terminals. Our unique blend of innovation and market leading technology with the warmth of traditional hospitality ensures that clients can rely on strict adherence to relevant security and safety protocols, a streamlined user interface as well as guaranteed customer satisfaction.</p>
								</div>
							</div>
						</div>
						<div class="card plain accordion-item">
							<div class="card-header" id="heading-individuals">
								<button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-individuals" aria-expanded="false" aria-controls="collapse-individuals"> For Individuals </button>
							</div>
							<div id="collapse-individuals" class="accordion-collapse collapse" aria-labelledby="heading-individuals" data-bs-parent="#accordion-serve">
								<div class="card-body">
									<p>We provides a flexible means of transactions tailored to solve individual needs. With a continued focus on excellent service, the goal remains to ensure maximum user satisfaction when conducting transactions via our payment platforms and channels.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="py-5">
						<a href="/" class="btn btn-primary rounded-pill mb-0">Start Transacting</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop