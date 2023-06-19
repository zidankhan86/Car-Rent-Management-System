<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="{{url ('frontend/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-5">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="./courses.html">Courses</a></li>
                        <li><a href="{{ route('car.rent') }}">Cars</a>

                        </li>
                        <li><a href="./blog.html">News</a></li>
                        <li><a href="./contact.html">Profile</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-5">
                <div class="header__right">
                    <div class="header__right__search">
                        <div class="search-box">
                          <input type="text" class="search-input" placeholder="Search">
                          <button class="btn-success" type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>

                    <div class="header__right__btn">
                        <a href="{{ route('login') }}" class="btn btn-success">Sign In</a>
                    </div>
                    <div class="header__right__btn">
                        <a href="{{ route('registration') }}" class="btn btn-info">Sign Up</a>
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
