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

            p{
                font-size: 1.2rem;
            }

        a{
            text-decoration: none;
            color: #fff;
        }

        a:hover{
            text-decoration: none;
            color: #f0f1ab;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .subhead{
        font-size: 1.7rem;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    .bg-orange {
            /* background-color: #E6AF2E!important; */
            background-color: #f9ca5d!important;
    }

    .no_padding{
        padding-top: 0rem;
        padding-bottom: 0rem;
    }

    .big_button{
        border: transparent;
        padding: 10px;
        color: #fff;
        font-size: 1.2rem;
     }

     .full_button{
        border: transparent;
        padding: 10px;
        color: #fff;
        font-size: 1.2rem;
        width: 100%;

     }

     .sweet_color_bg{
        background-color: #EF3341;
     }

     .bg_light{
        background: #EEF4ED;
    border: 1px solid #ddd;
     }

     .bg_wrapper{
        border-radius: 24px;
        align-items: center;
     }

     .no_padding{
        padding: 0px;
     }

     img.img100{
        width: 100%;
     }

     .auto_center{
        margin: auto;
         text-align: center;
     }

     h2{
        font-size: 2.5rem;
     }

     .space_aroaund{
        justify-content: space-around;
     }
     .font_medium{
        font-size: 1.5rem;
     }

     .big_p{
        font-size: 1.4rem;
     }

     section{
        display: block;
        margin-left: 30px;
        margin-right: 3px;
     }

     .gray_color{
        color: #938F8F;

     }

     .price_table_wrapper{
        background: #EEF4ED;;
    /* font-size: 2rem; */
    /* color: #fff; */
    border-radius: 19px 19px 0px 0px;

     }

     .price_title{
        font-size: 2rem;
    color: #fff;
    border-radius: 19px 19px 0px 0px;
     }

     .bg_blue_gradient{
        background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
     }

     .bg_red_gradient{
        background: linear-gradient(45deg, rgb(87, 0, 230) 0%, rgb(211, 6, 244) 100%)
     }


     .bg_yellow_gradient{
        background: linear-gradient(rgb(253, 253, 94) -9.52%, rgb(247, 200, 46) 100%);
     }



     .price_content{

     }

     ul li   { list-style-type: none;
    line-height: 2;
    font-size: 1.5rem;
}


    .big_button{
        border: none;
        /* border-radius: 8px; */
        padding: 15px;
        font-size: 2.1em;
        color: #fff;
        font-weight: bold;
    }




    .bg_blue_gradient{
        background: rgb(53,139,228);
        background: linear-gradient(90deg, rgba(53,139,228,1) 22%, rgba(9,56,121,1) 91%);
    }

    .bg_red_gradient{

    }


    .bg_yellow{
        background: #E6AF2E;
    }



    @media (max-width: 767px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* medium and up screens */
@media (min-width: 768px) {

    .carousel-inner .carousel-item-end.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(25%);
    }

    .carousel-inner .carousel-item-start.active,
    .carousel-inner .carousel-item-prev {
      transform: translateX(-25%);
    }
}

.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start {
  transform: translateX(0);
}


.carousel-control-next-icon {
    background-image: url("{{asset('front/images/right_arrow.png')}}");
}

.carousel-control-prev-icon {
    background-image: url("{{asset('front/images/left_arrow.png')}}");
}



    </style>


  </head>
  <body>

<header>
  <div class="collapse bg-orange" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
      {{-- <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div> --}}
    </div>
  </div>
  <div class=" bg-orange">
    <div class="container">
        <div class="" style="display: flex;
        justify-content: space-between;
        width: 100%;">
            <div>
                <a href="{{route('front.homepage')}}">
                <img src="{{asset('front/images/home-button.png')}}"
                style="width: 51px;padding: 2px;
                margin-top: 7px;">
                </a>
            </div>
            <div>
                <button class="big_button sweet_color_bg text-right fw-bold" style="font-size: 1.5rem"  > <a href="{{url('register')}}">Free Registration </a></button>
            </div>
        </div>
      {{-- <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
    </div>
  </div>
</header>

@yield('content')

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#"><img src="{{asset('front/images/backto_top.png')}}" style="width: 90px;"></a>
    </p>
    {{-- <p class="mb-1">1000 People IELTS Free IELTS Training is &copy; Its a British American Resource Center CSR Project</p> --}}
  </div>
</footer>
<script src="{{asset('front/assets/dist/js/bootstrap.bundle.min.js')}}"></script>

  </body>
</html>
