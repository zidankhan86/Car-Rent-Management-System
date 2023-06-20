<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="" style="color: rgb(6, 56, 56); font-size: 24px;"><strong>RentCar</strong></a>
                </div>
            </div>
            <div class="col-lg-5">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="./courses.html">DriverS</a></li>
                        <li><a href="{{ route('car.rent') }}">Cars</a>

                        </li>

                        @auth
                            @if (auth()->user()->role == 'customer')
                                <li><a href="{{ route('my.profile') }}">Profile</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            @endif
                        @else
                            <div class="header__right__btn">
                                <a href="{{ route('login') }}" class="btn btn-success">Sign In</a>
                            </div>
                            <div class="header__right__btn">
                                <a href="{{ route('registration') }}" class="btn btn-info">Sign Up</a>
                            </div>


                        @endauth
                    </ul>
                </nav>
            </div>
            <div class="col-lg-5">
                <div class="header__right">
                    <div class="header__right__search">
                        <div class="search-box">
                            <form action="{{ route('user.search') }}">
                                <input type="text" class="search-input" placeholder="Search" name="search">
                                <button type="submit" class="btn-success">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>



                </div>

            </div>
        </div>
        <div class="canvas__open">
            <span class="fa fa-bars"></span>
        </div>
    </div>
</header>
<!-- Header Section End -->
