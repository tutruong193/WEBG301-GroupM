
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Site Metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Energym</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- responsive style -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>

<body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="" />
              <span>
                Energym
              </span>
            </a>
            <div class="contact_nav" id="">
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a class="nav-link" href="service.html">
                    <img src="images/location.png" alt="" />
                    <span>Location</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">
                    <img src="images/call.png" alt="" />
                    <span>Call : + 01 1234567890</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">
                    <img src="images/envelope.png" alt="" />
                    <span>demo@gmail.com</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
  
      </header>
      <!-- end header section -->
      <!-- slider section -->
      <section class=" slider_section position-relative">
        <div class="container">
          <div class="custom_nav2">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
  
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex  flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item ">
                      <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('artist')}}">List Artist </a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{asset('contact')}}">Contact Us</a>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </section>
      <!-- end slider section -->
    </div>
@yield('main-content')