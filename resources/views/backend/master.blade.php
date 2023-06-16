<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{{url ('../assets/images/logo.png') }}">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="{{url ('../assets/images/logo.png') }}">

  <!-- style -->
  <link rel="stylesheet" href="{{url ('../assets/animate.css/animate.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{url ('../assets/glyphicons/glyphicons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{url ('../assets/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{url ('../assets/material-design-icons/material-design-icons.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{url ('../assets/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="{{url ('../assets/styles/app.css') }}" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="{{url ('../assets/styles/font.css') }}" type="text/css" />

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->




@include('backend.fixed.sidebar')




  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">



    @include('backend.fixed.header')





    @include('backend.fixed.footer')

    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->


@yield('content')

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  <!-- theme switcher -->
  <div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
      <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
        <i class="fa fa-gear"></i>
      </a>
      <div class="box-header">
        <a href="https://themeforest.net/item/flatkit-app-ui-kit/13231484?ref=flatfull" class="btn btn-xs rounded danger pull-right">BUY</a>
        <h2>Theme Switcher</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <p class="hidden-md-down">
          <label class="md-check m-y-xs"  data-target="folded">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Folded Aside</span>
          </label>
          <label class="md-check m-y-xs" data-target="boxed">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Boxed Layout</span>
          </label>
          <label class="m-y-xs pointer" ui-fullscreen>
            <span class="fa fa-expand fa-fw m-r-xs"></span>
            <span>Fullscreen Mode</span>
          </label>
        </p>
        <p>Colors:</p>
        <p data-target="themeID">
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'primary', accent:'accent', warn:'warn'}">
            <input type="radio" name="color" value="1">
            <i class="primary"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'accent', accent:'cyan', warn:'warn'}">
            <input type="radio" name="color" value="2">
            <i class="accent"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warn', accent:'light-blue', warn:'warning'}">
            <input type="radio" name="color" value="3">
            <i class="warn"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'success', accent:'teal', warn:'lime'}">
            <input type="radio" name="color" value="4">
            <i class="success"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'info', accent:'light-blue', warn:'success'}">
            <input type="radio" name="color" value="5">
            <i class="info"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'blue', accent:'indigo', warn:'primary'}">
            <input type="radio" name="color" value="6">
            <i class="blue"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warning', accent:'grey-100', warn:'success'}">
            <input type="radio" name="color" value="7">
            <i class="warning"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'danger', accent:'grey-100', warn:'grey-300'}">
            <input type="radio" name="color" value="8">
            <i class="danger"></i>
          </label>
        </p>
        <p>Themes:</p>
        <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
          <label class="p-a col-sm-6 light pointer m-0">
            <input type="radio" name="theme" value="" hidden>
            Light
          </label>
          <label class="p-a col-sm-6 grey pointer m-0">
            <input type="radio" name="theme" value="grey" hidden>
            Grey
          </label>
          <label class="p-a col-sm-6 dark pointer m-0">
            <input type="radio" name="theme" value="dark" hidden>
            Dark
          </label>
          <label class="p-a col-sm-6 black pointer m-0">
            <input type="radio" name="theme" value="black" hidden>
            Black
          </label>
        </div>
      </div>
    </div>

    <div class="switcher box-color black lt" id="sw-demo">
      <a href ui-toggle-class="active" target="#sw-demo" class="box-color black lt text-color sw-btn">
        <i class="fa fa-list text-white"></i>
      </a>
      <div class="box-header">
        <h2>Demos</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <div class="row no-gutter text-u-c text-center _600 clearfix">
          <a href="dashboard.html"
            class="p-a col-sm-6 primary">
            <span class="text-white">Default</span>
          </a>
          <a href="dashboard.0.html"
            class="p-a col-sm-6 success">
            <span class="text-white">Zero</span>
          </a>
          <a href="dashboard.1.html"
            class="p-a col-sm-6 blue">
            <span class="text-white">One</span>
          </a>
          <a href="dashboard.2.html"
            class="p-a col-sm-6 warn">
            <span class="text-white">Two</span>
          </a>
          <a href="dashboard.3.html"
            class="p-a col-sm-6 danger">
            <span class="text-white">Three</span>
          </a>
          <a href="dashboard.4.html"
            class="p-a col-sm-6 green">
            <span class="text-white">Four</span>
          </a>
          <a href="dashboard.5.html"
            class="p-a col-sm-6 info">
            <span class="text-white">Five</span>
          </a>
          <div
            class="p-a col-sm-6 lter">
            <span class="text">...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="{{url ('../libs/jquery/jquery/dist/jquery.js') }}"></script>
<!-- Bootstrap -->
  <script src="{{url ('../libs/jquery/tether/dist/js/tether.min.js') }}"></script>
  <script src="{{url ('../libs/jquery/bootstrap/dist/js/bootstrap.js') }}"></script>
<!-- core -->
  <script src="{{url ('../libs/jquery/underscore/underscore-min.js') }}"></script>
  <script src="{{url ('../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
  <script src="{{url ('../libs/jquery/PACE/pace.min.js') }}"></script>

  <script src="{{url ('scripts/config.lazyload.js') }}"></script>

  <script src="{{url ('scripts/palette.js') }}"></script>
  <script src="{{url ('scripts/ui-load.js') }}"></script>
  <script src="{{url ('scripts/ui-jp.js') }}"></script>
  <script src="{{url ('scripts/ui-include.js') }}"></script>
  <script src="{{url ('scripts/ui-device.js') }}"></script>
  <script src="{{url ('scripts/ui-form.js') }}"></script>
  <script src="{{url ('scripts/ui-nav.js') }}"></script>
  <script src="{{url ('scripts/ui-screenfull.js') }}"></script>
  <script src="{{url ('scripts/ui-scroll-to.js') }}"></script>
  <script src="{{url ('scripts/ui-toggle-class.js') }}"></script>

  <script src="{{url ('scripts/app.js') }}"></script>

  <!-- ajax -->
  <script src="{{url ('../libs/jquery/jquery-pjax/jquery.pjax.js') }}"></script>
  <script src="{{url ('scripts/ajax.js') }}"></script>
<!-- endbuild -->
</body>
</html>
