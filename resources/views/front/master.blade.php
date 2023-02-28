<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>1000 People Free IELTS Preparation</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <!-- Bootstrap core CSS -->
<link href="{{asset('front/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">



    <style>
    @font-face {
    font-family: 'LiAdor';
    src:  url("{{ asset('assets/font/LiAdorNoirritRegular.ttf') }}") format('truetype') ;
    font-weight: normal;
    font-style: normal;
    }


/* body {
    font-family: 'AponaLohit', Arial, sans-serif !important;
} */

body {
    font-family: 'LiAdor', Arial, sans-serif !important;
}

    </style>

    <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet">
  </head>
  <body>

<header>
  <div class=" bg-orange">
    <div class="container">
        <div class="" style="display: flex;
        justify-content: space-between;
        width: 100%;">
            <div>
                <a href="{{route('front.homepage')}}">
                <img src="{{asset('front/images/logo.png')}}"
                style="width: 51px;padding: 2px;
                margin-top: 7px;">
                </a>
            </div>
            <div>
                @auth
                <a style="font-size: 2rem;
                color: #000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('home')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('home') }}">
                        Dashboard
                    </a>


                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endauth

                @guest
                    @if (Request::is('/'))
                        <button class="big_button sweet_color_bg text-right fw-bold" style="font-size: 1.5rem"  > <a href="#price_chart"> Free Registration </a></button>
                    @else
                        <button class="big_button sweet_color_bg text-right fw-bold" style="font-size: 1.5rem"  > <a href="{{route('front.signup','confirm')}}"> Book Now  </a></button>
                    @endif
                 @endguest

            </div>
        </div>
    </div>
  </div>
</header>

    @yield('content')

    <footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
        <a href="#"><img src="{{asset('front/images/backto_top.png')}}" style="width: 90px;"></a>
        </p>
    </div>
    </footer>
    <script src="{{asset('front/assets/dist/js/bootstrap.bundle.min.js')}}"></script>

  </body>
</html>
