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
                        <table class="table table-bordered table-hover table-striped overflow-auto table-responsive">
                            <tr class="table-info">
                                <th>#</th>
                                <th>Legal Business Name</th>
                                <th>Store Name</th>
                                <th>Store Type</th>
                                <th>Residential Address</th>
                                <th>Username</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            @foreach($merchants as $merchant)
                            <tr>
                                <td>{{$loop->iteration }}</td>
                                <td>{{$merchant->merchant_legal_business_name}}</td>
                                <td>{{$merchant->store_name}}</td>
                                <td>{{$merchant->store_type}}</td>
                                <td>{{$merchant->residential_address}}</td>
                                <td>{{$merchant->username}}</td>
                                <td>{{$merchant->created_at->diffForHumans()}}</td>
                                <td><button class="btn btn-blue">view More</button></td>
                            </tr>
                            @endforeach

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a>{{ $merchants->links() }}</a></li>
                                </ul>
                            </nav>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
