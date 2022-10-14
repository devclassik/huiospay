@extends('layouts.front')
@section('content')
<section class="wrapper bg-softly-primary home-hero hero-wave">
    <div class="container pt-18 pt-md-20 pb-21 pb-md-21  text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                <h1 class="display-1 mb-3">Set Up your Account</h1>
                <p class="lead px-lg-5 px-xxl-8">kindly fill this form properly to enable us reach out to you.</p>
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
                                <form method="POST" action="{{route('saveSetup')}}">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                        @if (Session::has('success'))

                                            <div class="alert alert-success">

                                                {{ Session::get('success') }}</div>

                                        @endif
                                    @csrf
                                    <div class="messages"></div>
                                    <div class="row gx-4">

                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_name" type="text" name="mlbn" class="form-control" placeholder="Jane" required>
                                                <label for="form_name">Merchant Legal Business Name  *</label>
                                            </div>
                                        </div>

											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_lastname" type="text" name="sn" class="form-control" placeholder="Doe" required>
													<label for="form_lastname">Store Name  *</label>
												</div>
											</div>
											<!-- /column -->

											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="text" name="ra" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">Residential address *</label>
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please provide a valid Residential Address.
													</div>
												</div>
											</div>
											<!-- /column -->

											<div class="col-md-6">
												<div class="form-select-wrapper">
													<select class="form-select" id="form-select" name="st" required>
														<option selected disabled value="">Store type * </option>
														<option value="School">School</option>
														<option value="Pharmacy">Pharmacy</option>
														<option value="Retail shop">Retail shop</option>
														<option value="Petty trader">Petty trader</option>
														<option value="POS agent">POS agent</option>
														<option value="Petrol station">Petrol station</option>
														<option value="Hospital">Hospital</option>
														<option value="Driver">Driver</option>
														<option value="Restaurant">Restaurant</option>
														<option value="barber or hair dressing salon">Barber or hair dressing salon</option>
														<option value="ticketing agent">Ticketing agent</option>
														<option value="night club">Night club</option>
														<option value="production factory">Production factory</option>
														<option value="revenue office">Revenue office</option>
														<option value="Others">Others</option>
													</select>
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please Store type.
													</div>
												</div>
											</div>
											<!-- /column -->

											<div class="col-md-6">
												<div class="form-select-wrapper">
													<select class="form-select" id="form-select" name="iha" required>
														<option selected disabled value="">Are you a current Huiospay Agent * </option>
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
											<!-- /column -->

											<div class="col-12">
												<div class="form-check mb-4">
													<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
													<label class="form-check-label" for="invalidCheck">
													I would like to receive tips, news, offers, and information regarding products and services from HuiosPay? <br>
													 <a href="#" class="hover">Please read and agree Terms and Policy</a>.
													</label>
													<div class="invalid-feedback">
														You must agree before submitting.
													</div>
												</div>
											</div>
											<!-- /column -->

											<div class="col-12">
												<input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Proceed">
												<p class="text-muted"><strong>*</strong> These fields are required.</p>
											</div>
											<!-- /column -->
										</div>
										<!-- /.row -->
									</form>
									<!-- /form -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop

