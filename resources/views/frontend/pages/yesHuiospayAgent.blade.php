@extends('layouts.front')
@section('content')
<section class="wrapper bg-softly-primary home-hero hero-wave">
    <div class="container pt-18 pt-md-20 pb-21 pb-md-21  text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                <h1 class="display-1 mb-3">Complete  your Account Set Up</h1>
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
                                <form method="post" action="{{route('saveOldAgent',$id)}}">
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
                                    @if (Session::has('success'))

                                        <div class="alert alert-success">

                                            {{ Session::get('success') }}</div>

                                    @endif
                                    @csrf
                                    <div class="messages"></div>
                                    <div class="row gx-4">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-4">
                                                <input id="form_name" type="text" name="nmlbn" class="form-control" placeholder="Jane" required>
                                                <label for="form_name">New Merchant Legal Business Name  *</label>
                                            </div>
                                        </div>

											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_lastname" type="text" name="nsn" class="form-control" placeholder="Doe" required>
													<label for="form_lastname">New Store Name  *</label>
												</div>
											</div>
											<!-- /column -->

											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="text" name="address" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">New Store address *</label>
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
                                        </div><br><br>
                                        <!-- /column -->

											<div class="col-md-6">
												<div class="form-select-wrapper">
													<select class="form-select" id="form-select" name="nst" required>
														<option selected disabled value="">Store type </option>
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


                                            <div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="form_email" type="text" name="htn" class="form-control" placeholder="500" required>
													<label for="form_email">Highest numbers of transactions in a month? 1-1000 *</label>
												</div>
											</div>
											<!-- /column -->


                                            <div class="col-md-12">
												<div class="form-floating mb-4">
													<input id="form_email" type="text" name="tnos" class="form-control" placeholder="jane.doe@example.com" required>
													<label for="form_email">How many terminals do you need more? 1-100 *</label>
													<div class="valid-feedback">
												</div>
											</div>
											<!-- /column -->
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-4">
                                                        <textarea id="form_message" name="statelocation" class="form-control" placeholder="FCT: Capital hub abuja" style="height: 150px"></textarea>
                                                        <label for="form_message">State and Shop location *</label>
                                                    </div>
                                                </div>
                                                <!-- /column -->

											<div class="col-12">
												<input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Update Record">
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
