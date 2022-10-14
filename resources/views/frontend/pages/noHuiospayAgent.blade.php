@extends('layouts.front')
@section('content')
<section class="wrapper bg-softly-primary home-hero hero-wave">
    <div class="container pt-18 pt-md-20 pb-21 pb-md-21  text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                <h1 class="display-1 mb-3">Complete your Account Set Up</h1>
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
                                <form method="post" action="{{ route('saveNewAgent',$id) }}" enctype="multipart/form-data" >
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @include('sweetalert::alert')
{{--                                    @if (Session::has('success'))--}}

{{--                                        <div class="alert alert-success">--}}

{{--                                            {{ Session::get('success') }}</div>--}}

{{--                                    @endif--}}
                                    @csrf
                                    <div class="messages"></div>
                                    <div class="row gx-4">
                                        <div class="col-md-6">
                                            <div class="form-select-wrapper">
                                                <select class="form-select" id="form-select" name="st" required>
                                                    <option selected disabled value="">What business do you want the terminal(s) for </option>
                                                    <option value="School">School</option>
                                                    <option value="Pharmacy">Pharmacy</option>
                                                    <option value="Retail shop">Retail shop</option>
                                                    <option value="Petty trader">Petty trader</option>
                                                    <option value="POS agent">POS agent</option>
                                                    <option value="Petrol station">Petrol station</option>
                                                    <option value="Hospital">Hospital</option>
                                                    <option value="Driver">Driver</option>
                                                    <option value="Restaurant">Restaurant</option>
                                                    <option value="barber or hair dressing salon">barber or hair dressing salon</option>
                                                    <option value="ticketing agent">ticketing agent</option>
                                                    <option value="night club">night club</option>
                                                    <option value="production factory">production factory</option>
                                                    <option value="revenue office">revenue office</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
											<!-- /column -->

											<div class="col-md-6">
												<div class="form-select-wrapper">
													<select class="form-select" id="form-select" name="tt" required>
														<option selected disabled value="">What type of terminal do you need? </option>
														<option value="smartphones">Smartphones</option>
														<option value="tablets">Tablets</option>
														<option value="mobile POS">Mobile POS</option>
														<option value="card and chip readers">Card and chip readers</option>
														<option value="touch screens">Touch screens</option>
														<option value="computers">Computers</option>
														<option value="self-service kiosks, and terminals">Self-service kiosks, and terminals</option>
													</select>
												</div>
											</div> <br><br><br>
											<!-- /column -->

                                            <div class="col-md-6">
												<div class="form-select-wrapper">
													<select class="form-select" id="form-select"  name="fn" required>
														<option selected disabled value="">What are the features you think you’ll need? </option>
														<option value="In person">In person</option>
														<option value="online">Online</option>
														<option value="integration">Integration</option>
													</select>
												</div>
											</div>
											<!-- /column -->

                                            <div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="text" name="tnos" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">How many terminals do you need? 1-100 *</label>
												</div>
											</div>
											<!-- /column -->

                                            <div class="col-md-6">
												<div class="form-select-wrapper">
													<select class="form-select" name="pt" id="form-select" required>
														<option selected disabled value="">How do you intend to pay for the terminal(s)? </option>
														<option value="Outright buy">Outright buy</option>
														<option value="Monthly contract">Monthly contract</option>
													</select>
												</div>
											</div>
											<!-- /column -->

                                            <div class="col-md-6">
												<div class="form-select-wrapper">
													<select class="form-select" name="state" id="form-select" required>
                                                    <option selected disabled value="">Select your state? </option>
                                                    <option value="ABUJA FCT">ABUJA FCT</option>
                                                    <option value="ABIA">ABIA</option>
                                                    <option value="ADAMAWA">ADAMAWA</option>
                                                    <option value="AKWA IBOM">AKWA IBOM</option>
                                                    <option value="ANAMBRA">ANAMBRA</option>
                                                    <option value="BAUCHI">BAUCHI</option>
                                                    <option value="BAYELSA">BAYELSA</option>
                                                    <option value="BENUE">BENUE</option>
                                                    <option value="BORNO">BORNO</option>
                                                    <option value="CROSS RIVER">CROSS RIVER</option>
                                                    <option value="DELTA">DELTA</option>
                                                    <option value="EBONYI">EBONYI</option>
                                                    <option value="EDO">EDO</option>
                                                    <option value="EKITI">EKITI</option>
                                                    <option value="ENUGU">ENUGU</option>
                                                    <option value="GOMBE">GOMBE</option>
                                                    <option value="IMO">IMO</option>
                                                    <option value="JIGAWA">JIGAWA</option>
                                                    <option value="KADUNA">KADUNA</option>
                                                    <option value="KANO">KANO</option>
                                                    <option value="KATSINA">KATSINA</option>
                                                    <option value="KEBBI">KEBBI</option>
                                                    <option value="KOGI">KOGI</option>
                                                    <option value="KWARA">KWARA</option>
                                                    <option value="LAGOS">LAGOS</option>
                                                    <option value="NASSARAWA">NASSARAWA</option>
                                                    <option value="NIGER">NIGER</option>
                                                    <option value="OGUN">OGUN</option>
                                                    <option value="ONDO">ONDO</option>
                                                    <option value="OSUN">OSUN</option>
                                                    <option value="OYO">OYO</option>
                                                    <option value="PLATEAU">PLATEAU</option>
                                                    <option value="RIVERS">RIVERS</option>
                                                    <option value="SOKOTO">SOKOTO</option>
                                                    <option value="TARABA">TARABA</option>
                                                    <option value="YOBE">YOBE</option>
                                                    <option value="ZAMFARA">ZAMFARA</option>
													</select>
												</div>
											</div><br><br><br>
											<!-- /column -->

                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_email" type="text" name="address" class="form-control" placeholder="Jabi, Abuja" required>
                                                <label for="form_email">Business Address *</label>
                                            </div>
                                        </div>
                                        <!-- /column -->
                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_email" type="number" name="htn" class="form-control" placeholder="500" required>
                                                <label for="form_email">Highest numbers of transactions in a month? 1-1000 *</label>
                                            </div>
                                        </div>
                                        <!-- /column -->

{{--                                            <div class="col-md-6">--}}
{{--												<div class="form-floating mb-4">--}}
{{--													<input id="form_email" type="text" name="tneeded" class="form-control" placeholder="jane.doe@example.com" required>--}}
{{--													<label for="form_email">Shop Address *</label>--}}
{{--													<div class="valid-feedback">--}}
{{--														Looks good!--}}
{{--													</div>--}}
{{--													<div class="invalid-feedback">--}}
{{--														Please provide a valid shop Address.--}}
{{--													</div>--}}
{{--												</div>--}}
{{--											</div>--}}
											<!-- /column -->

                                            <div class="col-12">
												<div class="form-floating mb-4">
													<textarea id="form_message" name="statelocation" class="form-control" placeholder="FCT: Capital hub abuja" style="height: 150px"></textarea>
													<label for="form_message">State and Shop location *</label>
												</div>
											</div>
											<!-- /column -->



                                            <!-- <div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="text" name="tn" class="form-control" placeholder="500" required>
													<label for="form_email">Highest numbers of transactions in a month? 1-1000 *</label>
													<div class="valid-feedback">
														Looks good!
													</div>
													<div class="invalid-feedback">
														Please provide a valid Highest numbers of transactions in a month? 1-1000.
													</div>
												</div>
											</div> -->
											<!-- /column -->

                                            <div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="text" name="bpn" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">Main Business Contact person Name*</label>
												</div>
											</div>
											<!-- /column -->

                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_email" type="text" name="ocn" class="form-control" placeholder="jane.doe@example.com" required>
                                                <label for="form_email">Owner Contact person Name*</label>
                                            </div>
                                        </div>
                                        <!-- /column -->

                                            <div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="email" name="bpe" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">Main Business Contact person email *</label>
												</div>
											</div>
											<!-- /column -->
                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_email" type="email" name="cpe" class="form-control" placeholder="jane.doe@example.com" required>
                                                <label for="form_email"> Owner Contact person email *</label>
                                            </div>
                                        </div>
                                        <!-- /column -->

                                            <div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="tel" name="bpt" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">Main Business Contact person Tel *</label>
												</div>
											</div>
											<!-- /column -->

                                            <div class="col-md-6">
                                                <div class="form-floating mb-4">
                                                    <input id="form_email" type="tel" name="cpt" class="form-control" placeholder="jane.doe@example.com" required>
                                                    <label for="form_email">Owner Contact person Tel *</label>
                                                </div>
                                            </div>
                                            <!-- /column -->

                                            <div class="col-md-12">
                                                <div class="form-floating mb-6">
                                                    <input type="file" name="picture" class="form-control" required>
                                                    <label for="form_email">Image *</label>
                                                </div>
                                            </div>

                                            <!-- /column -->

											<div class="col-12">
												<div class="form-check mb-4">
													<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
													<label class="form-check-label" for="invalidCheck">
													I agreee to Terms and Policy? <br>
													 <a href="#" class="hover">Please read and agree Terms and Policy</a>.
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
