@extends('frontend.master')
@section('content')


<br><br><br><br>
<br><br><br><div class="container mt-100">




    <div class="row">
        @if($searchResult->count()>0)
            @foreach($searchResult as $car)
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30">
                    <a class="card-img-tiles" href="#" data-abc="true">
                        <div class="inner">
                            <div class="main-img">
                                <img src="{{ url('/uploads/'.$car->image) }}" alt="Category">
                            </div>

                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Name:{{$car->car_name}}</h4>
                        <h4 class="card-title">Name:{{$car->CarRelation->brand_name}}</h4>
                        <h4 class="card-title">Name:{{$car->CarRelation->fuel_type}}</h4>
                        <p class="text-muted">Sit: {{$car->sit}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <p class="alert alert-danger">No Product Found.</p>
        @endif
    </div>
</div>

@endsection
