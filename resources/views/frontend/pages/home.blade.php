@extends('frontend.master')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="{{url ('frontend/img/hero-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero__text">
                        <h5>Best options for you</h5>
                        <h2>drive safe & get license</h2>
                        <a href="#" class="primary-btn">Contact us</a>
                        <a href="#" class="primary-btn second-bg">See Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Feature Section Begin -->
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Why choose us ?</span>
                            <h2>Our feature</h2>
                        </div>
                        <p>One of the best features of a car rental service is the option for flexible pickup and drop-off locations. </p>
                        <a href="#" class="primary-btn second-bg">Thanks</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature__item">
                                <img src="{{url ('frontend/img/feature/feature-1.png') }}" alt="">
                                <h5>Unlimited Car Support</h5>
                            </div>
                            <div class="feature__item">
                                <img src="{{url('frontend/img/feature/feature-2.png')}}" alt="">
                                <h5>Driving School Insures</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature__item right-column">
                                <img src="{{url ('frontend/img/feature/feature-3.png') }}" alt="">
                                <h5>Any Time Any Location</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- About Video Section Begin -->
    <section class="about-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="about__video__bg set-bg" data-setbg="{{url ('frontend/img/video-bg.jpg') }}">

                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about__video__text">
                        <div class="section-title">
                            <span>Welcome to Online Car Service</span>
                            <h2>looking for Car?</h2>
                        </div>
                        <p>One of the best car rental services available today is known for its exceptional customer service,
                            extensive vehicle selection, and competitive pricing.
                             With a user-friendly online platform and a seamless reservation process, customers can easily browse and choose from a wide range of well-maintained cars to suit their specific needs.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Video Section End -->

    

    <!-- Pricing Section Begin -->
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
                            <li><strong style="color: blueviolet">Sit :</strong>{{$car->sit}}</li>
                        </ul>
                        <a href="{{ route('booking.details',$car->id) }}" class="primary-btn second-bg">Book Now</a>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

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
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="{{url ('frontend/img/team/team-1.png') }}" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID WARNER</h5>
                            <span>Instructor</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="{{url ('frontend/img/team/team-2.png') }}" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID WARNER</h5>
                            <span>Instructor</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="{{url ('frontend/img/team/team-3.png') }}" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID WARNER</h5>
                            <span>Instructor</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="{{url ('frontend/img/team/team-4.png') }}" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID WARNER</h5>
                            <span>Instructor</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
  @endsection
