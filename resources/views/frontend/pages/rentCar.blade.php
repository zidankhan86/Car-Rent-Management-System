@extends('frontend.master')
@section('content')


<section class="pricing spad set-bg" data-setbg="{{url ('frontend/img/pricing-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <span>Get Special Offer</span>
                    <h2>Our Service</h2>
                </div>
            </div>
        </div>
        <div class="row">


            @foreach ($cars as $car)



            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="pricing__item__title">
                       <img width="300px" height="200" src="{{ url('/uploads/'.$car->image) }}" alt="">
                    </div>
                    <ul>
                        <li><strong style="color: blueviolet">Brand :</strong> {{ $car->CarRelation->brand_name }}</li>
                        <li><strong style="color: blueviolet">Rent Fee :</strong> {{ $car->fee }} BDT/day </li>
                        <li><strong style="color: blueviolet">Car Name :</strong>{{$car->car_name}}</li>
                        <li><strong style="color: blueviolet">Sit: </strong>{{$car->sit}}</li>
                        <li><strong style="color: blueviolet">Availeable Cars: </strong>{{$car->stock}}</li>
                    </ul>
                    @if($car->stock > 0)
                                            <a href="{{ route('booking.details', $car->id) }}" class="primary-btn second-bg">Details</a>
                    @else
                        <a class="primary-btn second-bg">Car Not Available</a>
                    @endif
                </div>
            </div>

            @endforeach

        </div>

        {{ $cars->links() }}
    </div>
</section>

@endsection
