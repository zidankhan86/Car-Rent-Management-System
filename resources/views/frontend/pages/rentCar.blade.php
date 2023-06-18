@extends('frontend.master')
@section('content')


<section class="pricing spad set-bg" data-setbg="{{url ('frontend/img/pricing-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <span>Get Special Offer</span>
                    <h2>Our Pricing</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="pricing__item__title">
                        <span>20% off</span>
                        <h2>$ 199</h2>
                        <h5>Personal Driving</h5>
                    </div>
                    <ul>
                        <li>Full course theory</li>
                        <li>Full driving course</li>
                        <li>Training in first aid</li>
                        <li>Practical sessions</li>
                        <li>Psychological support</li>
                    </ul>
                    <a href="#" class="primary-btn second-bg">get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="pricing__item__title">
                        <span>20% off</span>
                        <h2>$ 379</h2>
                        <h5>Power Booster</h5>
                    </div>
                    <ul>
                        <li>Full course theory</li>
                        <li>Full driving course</li>
                        <li>Training in first aid</li>
                        <li>Practical sessions</li>
                        <li>Psychological support</li>
                    </ul>
                    <a href="#" class="primary-btn second-bg">get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <div class="pricing__item__title">
                        <span>20% off</span>
                        <h2>$ 259</h2>
                        <h5>Freight Driving</h5>
                    </div>
                    <ul>
                        <li>Full course theory</li>
                        <li>Full driving course</li>
                        <li>Training in first aid</li>
                        <li>Practical sessions</li>
                        <li>Psychological support</li>
                    </ul>
                    <a href="#" class="primary-btn second-bg">get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
