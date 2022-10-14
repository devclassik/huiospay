@extends('layouts.front')
@section('content')
<section class="wrapper bg-softly-primary home-hero hero-wave">
					<div class="container pt-18 pt-md-20 pb-21 pb-md-21  text-center">
						<div class="row">
							<div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
								<h1 class="display-1 mb-3">Contact Us</h1>
								<p class="lead px-lg-5 px-xxl-8">Have any questions? Reach out to us through any means below and we will get back to you shortly.</p>
							</div>
						</div>
					</div>
				</section>
<section class="wrapper bg-light">
	<div class="container pb-14 pb-md-16">
		<div class="row">
			<div class="col mt-n19 mb-16">
				<div class="card shadow-lg py-5">					
					<div class="row gx-0 py-5">
						<div class="col-xl-10 mx-auto">
							<div class="row gy-10 gx-lg-8 gx-xl-12">
								<div class="col-lg-8">
									<form class="contact-form needs-validation" method="post" action="@@webRoot/assets/php/contact.php" novalidate>
										<div class="messages"></div>
										<div class="row gx-4">
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
													<label for="form_name">First Name *</label>
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please enter your first name.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
													<label for="form_lastname">Last Name *</label>
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please enter your last name.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">Email *</label>
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please provide a valid email address.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-select-wrapper">
													<select class="form-select" id="form-select" required>
														<option selected disabled value="">Select a department</option>
														<option value="1">Sales</option>
														<option value="2">Marketing</option>
														<option value="3">Customer Support</option>
													</select>
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please select a department.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-12">
												<div class="form-floating mb-4">
													<textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
													<label for="form_message">Message *</label>
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please enter your messsage.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-12">
												<div class="form-check mb-4">
													<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
													<label class="form-check-label" for="invalidCheck">
														I agree to <a href="#" class="hover">terms and policy</a>.
													</label>
													<div class="invalid-feedback">
														You must agree before submitting.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-12">
												<input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
												<p class="text-muted"><strong>*</strong> These fields are required.</p>
											</div>
											<!-- /column -->
										</div>
										<!-- /.row -->
									</form>
									<!-- /form -->
								</div>
								<!--/column -->
								<div class="col-lg-4">
									<div class="d-flex flex-row">
										<div>
											<div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
										</div>
										<div>
											<h5 class="mb-1">Address</h5>
											<address class="pr-xl-2">Plot 86, Cadastral Zone B06, Mabushi District, Abuja.</address>
										</div>
									</div>
									<div class="d-flex flex-row">
										<div>
											<div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
										</div>
										<div>
											<h5 class="mb-1">Phone</h5>
											<p><a href="tel:08037086670">08037086670</a><br /> </p>
										</div>
									</div>
									<div class="d-flex flex-row">
										<div>
											<div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
										</div>
										<div>
											<h5 class="mb-1">E-mail</h5>
											<p><a href="mailto:hello@huiospay.com">hello@huiospay.com</a><br /> </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="wrapper bg-light">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15757.917100030416!2d7.4337416!3d9.1111089!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca26abbfd582005f!2sCadastral%20zone%20B06!5e0!3m2!1sen!2sng!4v1637857199044!5m2!1sen!2sng"  style="width:100%; height: 700px; border:0" allowfullscreen="" loading="lazy"></iframe>
	</div>
</section>
@stop