@extends('layouts.landing.app')

@section('title','Dashboard')

@section('styler')
<link rel="shortcut icon" href="">
<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="{{asset('assets/admin')}}/css/vendor.min.css">
<link rel="stylesheet" href="{{asset('assets/admin')}}/vendor/icon-set/style.css">
<!-- CSS Front Template -->
<link rel="stylesheet" href="{{asset('assets/admin')}}/css/theme.minc619.css?v=1.0">
@stack('css_or_js')

<style>
    .scroll-bar {
        max-height: calc(100vh - 100px);
        overflow-y: auto !important;
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 1px #cfcfcf;
        /*border-radius: 5px;*/
    }

    ::-webkit-scrollbar {
        width: 3px;
    }

    ::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        /*border-radius: 5px;*/
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #FC6A57;
    }
    .deco-none {
        color: inherit;
        text-decoration: inherit;
    }
    .qcont{
        text-transform: lowercase;
    }
    .qcont:first-letter {
        text-transform: capitalize;
    }



    .navbar-vertical .nav-link {
        color: #ffffff;
    }

    .navbar .nav-link:hover {
        color: #C6FFC1;
    }

    .navbar .active > .nav-link, .navbar .nav-link.active, .navbar .nav-link.show, .navbar .show > .nav-link {
        color: #C6FFC1;
    }

    .navbar-vertical .active .nav-indicator-icon, .navbar-vertical .nav-link:hover .nav-indicator-icon, .navbar-vertical .show > .nav-link > .nav-indicator-icon {
        color: #C6FFC1;
    }

    .nav-subtitle {
        display: block;
        color: #fffbdf91;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .03125rem;
    }

    .navbar-vertical .navbar-nav.nav-tabs .active .nav-link, .navbar-vertical .navbar-nav.nav-tabs .active.nav-link {
        border-left-color: #C6FFC1;
    }
</style>
@endsection
@section('content')
    <main>
      @include('layouts.vendor.partials._front-settings')
      <!-- End Builder -->

      <!-- JS Preview mode only -->
      @include('layouts.vendor.partials._header')
      @include('layouts.vendor.partials._sidebar')
        {{--loader--}}
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div id="loading" style="display: none;">
                      <div style="position: fixed;z-index: 9999; left: 40%;top: 37% ;width: 100%">
                          <img width="200" src="{{asset('assets/admin/img/loader.gif')}}">
                      </div>
                  </div>
              </div>
          </div>
        </div>
        {{--loader--}}

        <!-- Builder -->
        @include('layouts.vendor.partials._front-settings')
        <!-- End Builder -->

        <!-- JS Preview mode only -->
        @include('layouts.vendor.partials._header')
        @include('layouts.vendor.partials._sidebar')
        <!-- END ONLY DEV -->

        <main id="content" role="main" class="main pointer-event">
          <!-- Content -->
        @yield('content')
    </main>
@endsection