<!-- aside -->
<div id="aside" class="app-aside modal nav-dropdown">
    <!-- fluid app aside -->
  <div class="left navside dark dk" data-layout="column">
      <div class="navbar no-radius">
      <!-- brand -->
      <a class="navbar-brand">
          <div ui-include="'../assets/images/logo.svg'"></div>
          <img src="../assets/images/logo.png" alt="." class="hide">
          <span class="hidden-folded inline">Car Rent</span>
      </a>
      <!-- / brand -->
    </div>
    <div class="hide-scroll" data-flex>
        <nav class="scroll nav-light">

            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li>

              <li>
                <a href="{{ route('dashboard') }}" >
                  <span class="nav-icon">

                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>

              <li>
                <a href="{{ route('brand.form') }}">
                  </span>
                  <span class="nav-text">Brands</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="" >
                      <span class="nav-text">Manage Car</span>
                    </a>
                  </li>
                  <li>
                    <a href="contact.html" >
                      <span class="nav-text">Contacts</span>
                    </a>
                  </li>
                  <li>
                    <a href="calendar.html" >
                      <span class="nav-text">Calendar</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>

                  <span class="nav-text">Manage Car</span>
                </a>
              </li>

              <li>
                <a href="widget.html" >
                  <span class="nav-icon">

                  </span>
                  <span class="nav-text">Manage Booking</span>
                </a>
              </li>
              <li>
                <a href="widget.html" >
                  <span class="nav-icon">

                  </span>
                  <span class="nav-text">Upload Content</span>
                </a>
              </li>


              <li>
                <a href="widget.html" >
                  <span class="nav-icon">

                  </span>
                  <span class="nav-text">Manage Customer</span>
                </a>
              </li>

            </ul>
        </nav>
    </div>

  </div>
</div>
<!-- / -->
