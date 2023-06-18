<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dreams | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url ('frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{url ('frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{url ('frontend/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{url ('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{url ('frontend/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{url ('frontend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{url ('frontend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{url ('frontend/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->


    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__search">
            <i class="fa fa-search search-switch"></i>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{url ('frontend/img/logo.png') }}" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./courses.html">Courses</a></li>
                <li class="active"><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./about.html">About</a></li>
                        <li><a href="./instructor.html">Instructor</a></li>
                        <li><a href="./pricing.html">Pricing</a></li>
                        <li><a href="./faq.html">FAQ</a></li>
                        <li><a href="./course-details.html">Course Details</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Get Started</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->



    @include('frontend.fixed.header')




@yield('content')




@include('frontend.fixed.footer')



    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{url ('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{url ('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{url ('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{url ('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{url ('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{url ('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{url ('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{url ('frontend/js/main.js') }}"></script>
</body>

</html>
