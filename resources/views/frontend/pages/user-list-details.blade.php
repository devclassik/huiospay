@extends('layouts.front')
@section('content')
    <section class="wrapper bg-softly-primary home-hero hero-wave">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16  text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <h1 class="display-1 mb-3">Merchant List</h1>
                    <p class="lead px-lg-5 px-xxl-8">Below are the list of registered Merchant</p>
                </div>
            </div>
        </div>
    </section>
    <!-- merchant section -->
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="card shadow-lg py-5">
                <div class="row gx-0 py-5">
                    <div class="col-xl-10 mx-auto">
                        <!-- /form -->
                        <table  class="table table-bordered-md table-hover table-striped overflow-auto table-responsive">
                            <tr class="table-info table-responsive-sm">
                                <th>#</th>
                                <th>Business Type</th>
                                <th>Type of Terminal</th>
                                <th>Features Needed</th>
                                <th>No Terminal Needed</th>
                                <th>Payment Type</th>
                                <th>Business State</th>
                                <th>Business Address</th>
                                <th>State/Location</th>
                                <th>Main Business Person Name</th>
                                <th>Main Business Person email</th>
                                <th>Main Business Person Tel</th>
                                <th>Business Owner Person Name</th>
                                <th>Business Owner Person Email</th>
                                <th>Business Owner Person Tel</th>
                                <th>New Merchant Legal Name</th>
                                <th>New Store Name</th>
                                <th>Highest No Transaction</th>
                                <th>Image Path</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            @foreach($merchants as $merchant)
                                <tr >
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$merchant->business_type}}</td>
                                    <td>{{$merchant->type_of_terminal}}</td>
                                    <td>{{$merchant->features_needed}}</td>
                                    <td>{{$merchant->no_terminal_needed}}</td>
                                    <td>{{$merchant->payment_type}}</td>
                                    <td>{{$merchant->business_state}}</td>
                                    <td>{{$merchant->business_address}}</td>
                                    <td>{{$merchant->state_location}}</td>
                                    <td>{{$merchant->main_business_person_name}}</td>
                                    <td>{{$merchant-> main_business_person_email}}</td>
                                    <td>{{$merchant->main_business_person_tel}}</td>
                                    <td>{{$merchant->owner_business_person_name}}</td>
                                    <td>{{$merchant->owner_business_person_email}}</td>
                                    <td>{{$merchant->owner_business_person_tel}}</td>
                                    <td>{{$merchant->new_merchant_legal_name}}</td>
                                    <td>{{$merchant->new_store_name}}</td>
                                    <td>{{$merchant->highest_no_transaction}}</td>
                                    <!-- <td>{{$merchant->image_path}}</td> -->
                                    <td  ><img src="{{asset('storage')}}/{{$merchant->image_path }}" class="zoom" width="30px" style="border-radius: 10px" onclick="pop()" ></td>
                                    <style>
                                        .zoom {
                                            transition: transform .2s; /* Animation */
                                            cursor: zoom-in;
                                        }
                                        .zoom:hover {
                                            transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                                        }
                                    </style>
                                    <script type="text/javascript">
                                        function pop(){
                                            Swal.fire({
                                                // title: 'Sweet!',
                                                text: "{{$merchant->owner_business_person_name}}",
                                                imageUrl: "{{asset('storage')}}/{{$merchant->image_path }}",
                                                imageWidth: 400,
                                                // imageHeight: 200,
                                                imageAlt: 'Custom image',
                                            })
                                        }

                                    </script>
                                    <td>{{$merchant->created_at->diffForHumans()}}</td>
                                    <td style="display:flex; align-content: space-around" >
                                        <button class="btn btn-blue">view More</button>
                                        <button class="btn btn-blue">Block</button>
                                </td>
                                </tr>
                            @endforeach

{{--                            <nav aria-label="Page navigation example">--}}
{{--                                <ul class="pagination justify-content-end">--}}
{{--                                    <li class="page-item"><a>{{ $merchants->links() }}</a></li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
