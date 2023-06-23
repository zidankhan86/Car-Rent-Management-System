@extends('frontend.master')

@section('content')


<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="section-title">
                    <span>Our Great Team</span>
                    <h2>Our Instructors</h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="team__all">
                    <a href="#" class="primary-btn second-bg">View all</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($drivers as $driver)



            <div class="col-lg-6">
                <div class="team__item">
                    <div class="team__item__img">
                        <img width="150" height="150" src="{{ url('/uploads/'.$driver->image) }}" alt="">
                    </div>
                    <div class="team__item__text">
                        <h5>{{ $driver->name }}</h5>
                        <span>Driver</span>
                        <p>{{ $driver->about_driver }}</p>
                        <p>Professional Driver</p>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        {{ $drivers->links() }}
    </div>
</section>
<!-- Team Section End -->

@endsection
