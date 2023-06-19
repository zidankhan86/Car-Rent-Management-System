@extends('frontend.master')

@section('content')


<style>

    body{
        background-color: #edf1f5;
        margin-top:20px;
    }
    .card {
        margin-bottom: 30px;
    }
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 0;
    }
    .card .card-subtitle {
        font-weight: 300;
        margin-bottom: 10px;
        color: #8898aa;
    }
    .table-product.table-striped tbody tr:nth-of-type(odd) {
        background-color: #f3f8fa!important
    }
    .table-product td{
        border-top: 0px solid #dee2e6 !important;
        color: #728299!important;
    }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <br><br> <br><br> <br><br><div class="container">
        <div class="card">
            <div class="card-body">
              
                <h6 class="card-subtitle"></h6>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center"><img height="550px" width="350px" src="{{ url('/uploads/'.$cars->image) }}" class="img-responsive"></div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6">
                        <h4 class="box-title mt-5">About Cars</h4>
                        <p>{{ $cars->description }}</p>
                        <h2 class="mt-5">
                        Car Rent {{ $cars->fee }} - Tk /day
                        </h2>

                        <p style="color: black font-weight: bold;">  <span>Car Name: </span>{{ $cars->CarRelation->brand_name }}</p>
                        <p style="color: black font-weight: bold;">  <span>Car Brand: </span>{{ $cars->car_name }}</p>
                        <p style="color: black font-weight: bold;">  <span>Car Seat: </span>{{ $cars->sit }}</p>

                        <a href="{{ route('booking.form') }}" class="btn btn-primary btn-rounded">Book Now</a>
                        <h3 class="box-title mt-5">Key Highlights</h3><br>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success"></i>Wide vehicle selection for diverse customer needs.</li>
                            <li><i class="fa fa-check text-success"></i>Flexible rental terms for convenience and customization.</li>
                            <li><i class="fa fa-check text-success"></i>Transparent pricing and policies for trust and clarity.</li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
