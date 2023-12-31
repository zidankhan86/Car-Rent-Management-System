<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                @auth

                @if(auth()->user()->role== 'admin')

                <div class="sb-sidenav-menu-heading">Main</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Brands
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('brand.form') }}">Add Brands</a>
                        <a class="nav-link" href="{{ route('brand.table') }}">Brand List</a>
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Manage Car
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="{{ route('car.form') }}"  data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Add Car
                        </a>

                        <a class="nav-link collapsed" href="{{ route('car.table') }}" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Car List
                        </a>

                    </nav>
                </div>


                <a class="nav-link" href="{{ route('bookings.lists') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                     Booking
                </a>


                <a class="nav-link" href="{{ route('registration.driver') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Driver Register
                </a>


                <a class="nav-link" href="{{ route('add.driver') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Driver Post
                </a>

                <a class="nav-link" href="{{ route('order.report') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Report
                </a>

                @else

                <div>
                <a class="btn btn-warning" class="nav-link" href="">
                    <div class="sb-nav-link-icon">
                    </div>
                    Rent Assigend
                    @php
                    $totalBook=App\Models\Book::where('status','Assigned')->count();
                    @endphp
                </a>

            </div>


                @endif
                @endauth



            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div

             class="small">Logged in as:</div>
           {{ auth()->user()->name }}  <br>
        </div>
    </nav>
</div>
