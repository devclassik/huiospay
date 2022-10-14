@php $title=$page->title; @endphp
@php $author=$settings->company; @endphp
@php $keywords=$settings->keywords; @endphp
@php (empty($page->description))?$settings->description:$page->description; @endphp
@extends('layouts.front')
@section('content')
    <!-- pricing plan section -->
	<section id="snippet-1" class="wrapper bg-light wrapper-border">
		<div class="container pt-15 pt-md-17 pb-13 pb-md-15">
			<div class="row gy-6">
				<div class="col-lg-3">
					<h2 class="display-4 mt-lg-18 mb-3">Our Pricing</h2>
					<p class="lead fs-md">The best payment services for <span class="underline">great prices</span>, possibly the lowest price you will find in the market.</p>
					<a href="#" class="btn btn-primary rounded-pill mt-2">Get Started</a>
				</div>
				<div class="col-lg-8 offset-lg-1 pricing-wrapper">
				<div class="row gy-6 position-relative mt-5">
					<div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="bottom: -0.5rem; right: -1.6rem; transform: translate3d(0px, 106px, 0px);"></div>
					<div class="shape rounded-circle bg-line red rellax w-18 h-18" data-rellax-speed="1" style="top: -1rem; left: -2rem; transform: translate3d(0px, 28px, 0px);"></div>
					<div class="col-md-6">
					<div class="pricing card">
						<div class="card-body pb-12">
							<div class="prices text-dark">
								<div class="price price-show"><span class="price-currency">₦</span><span class="price-value"> 1.4% </span> <span class="price-duration">+ ₦100</span></div>
							</div>
							<h4 class="card-title mt-2">Local Transaction</h4>
							<ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9">
								<li><i class="uil uil-check"></i><span><strong>₦100</strong> fee waived for transactions under ₦2500</span></li>
								<li><i class="uil uil-check"></i><span><strong></strong> Local transactions fees are capped at ₦2000, meaning that's the absolute maximum you'll ever pay in fees per transaction</span></li>
							</ul>
						</div>
					</div>
					</div>
					<div class="col-md-6 popular">
					<div class="pricing card">
						<div class="card-body pb-12">
							<div class="prices text-dark">
								<div class="price price-show"><span class="price-currency">₦</span><span class="price-value">3.6</span> <span class="price-duration">+ ₦100</span></div>
								{{-- <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">year</span></div> --}}
							</div>
							<h4 class="card-title mt-2">International Transaction</h4>
							<ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9">
								<li><i class="uil uil-check"></i><span>Get paid by your customers from all over the world</span></li>
								<li><i class="uil uil-check"></i><span>International cards are charged and settled in Naira by default, but you can also choose to get settled in USD</span></li>
							</ul>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
		</div>		
		<div class="container pb-11 pb-md-12">
			<h2 class="pl-1">Transfers</h4>
			<div class="table-responsive">
				<table class="table text-center">
					<tbody>
						<tr>
							<td class="option text-start w-70" style="width:70%">Transfers of NGN 5,000 and below</td>
							<td>NGN 10 per Transfer</td>
						</tr>
						<tr>
							<td class="option text-start w-70" style="width:70%">Transfers between NGN 5,001 and NGN 50,000</td>
							<td>NGN 25 per Transfer</td>
						</tr>
						<tr>
							<td class="option text-start w-70" style="width:70%">Transfers above NGN 50,000</td>
							<td>NGN 50 per Transfer</td>
						</tr>
					</tbody>
				</table>
			</div>
			<h4 class="pl-1">User verification</h4>
			
			<div class="table-responsive">
				<table class="table text-center">
					<tbody>
						<tr>
							<td class="option text-start w-70" style="width:70%">BVN Match API</td>
							<td>NGN 15 per API call</td>
						</tr>
						<tr>
							<td class="option text-start w-70" style="width:70%">NIN Verification API</td>
							<td>NGN 15 per API call</td>
						</tr>
					</tbody>
				</table>
			</div>
		  </div>
	</section>
	<!-- end pricing section -->
@stop