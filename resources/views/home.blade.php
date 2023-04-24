@extends('header')
@section('main-section')
{{-- <section class="slider">
    @foreach($artists as $artist)
    <div class="img-items">
        <div class="img fade">
            <img src="{{$artist ->Img}}" alt="">
            <h2 class="img-heading">Kit</h2>
            <div class="text">Nội dung caption của slide đầu tiên!</div>
        </div>
        @endforeach 
    </div>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
      </div>  
</section>
<script>
    //khai báo biến slideIndex đại diện cho slide hiện tại
    var slideIndex;
    // KHai bào hàm hiển thị slide
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("img");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex].style.display = "block";  
        dots[slideIndex].className += " active";
        //chuyển đến slide tiếp theo
        slideIndex++;
        //nếu đang ở slide cuối cùng thì chuyển về slide đầu
        if (slideIndex > slides.length - 1) {
          slideIndex = 0
        }    
        //tự động chuyển đổi slide sau 5s
        setTimeout(showSlides, 5000);
    }
    //mặc định hiển thị slide đầu tiên 
    showSlides(slideIndex = 0);


    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
  </script>

<div class="cartegory-products row">
                    @foreach($artists as $artist)
                        <div class="cartegory-kit-products-item">
                            <a href="{{route('artists.show', $artist->id)}}" name="cartegory_choice">
                            <img src="{{$artist ->Img}}" alt="">
                            <h1  style="color: black">{{$artist -> FirstName}} {{ $artist -> LastName}}</h1>
                            <p>{{$artist -> price }}$</p>
                            </a>    
                            <button type="submit" style="width:25%;height:40px ;background-color: rgb(186, 51, 51); border-radius:5px" >
                                <i class="ti-shopping-cart" name="add-to-cart" style="padding-left:10px; color:white;font-style:initial"> Add list</i>
                            </button>
                        </div>
                  @endforeach
            </div> --}}
            <body>
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
                                <li class="nav-item active">
                                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="about.html">About </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="service.html">Services </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="{{asset('contact')}}">Contact Us</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </nav>
                      </div>
                    </div>
                    <div class="slider_container">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="container">
                              <div class="row">
                                <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                                  <div class="detail-box">
                                    <h2>
                                      Get Your Body
                                    </h2>
                                    <h1>
                                      Fitness Here
                                    </h1>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                      labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </p>
                                    <div class="btn-box">
                                      <a href="" class="btn-1">
                                        Read More
                                      </a>
                                      <a href="" class="btn-2">
                                        Get A Quote
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item ">
                            <div class="container">
                              <div class="row">
                                <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                                  <div class="detail-box">
                                    <h2>
                                      Get Your Body
                                    </h2>
                                    <h1>
                                      Fitness Here
                                    </h1>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                      labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </p>
                                    <div class="btn-box">
                                      <a href="" class="btn-1">
                                        Read More
                                      </a>
                                      <a href="" class="btn-2">
                                        Get A Quote
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item ">
                            <div class="container">
                              <div class="row">
                                <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                                  <div class="detail-box">
                                    <h2>
                                      Get Your Body
                                    </h2>
                                    <h1>
                                      Fitness Here
                                    </h1>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                      labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </p>
                                    <div class="btn-box">
                                      <a href="" class="btn-1">
                                        Read More
                                      </a>
                                      <a href="" class="btn-2">
                                        Get A Quote
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!-- end slider section -->
                </div>
              
              
                <!-- about section -->
              
                <section class="about_section layout_padding">
                  <div class="container">
                    <div class="heading_container">
                      <h2>
                        About Energym
                      </h2>
                    </div>
                    <div class="box">
                      <div class="img-box">
                        <img src="images/about-img.png" alt="">
                      </div>
                      <div class="detail-box">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                        </p>
                        <a href="">
                          Read More
                        </a>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- end about section -->
              
                <!-- service section -->
              
                <section class="service_section layout_padding">
                  <div class="container">
                    <div class="heading_container">
                      <h2>
                        Our Services
                      </h2>
                    </div>
                    <div class="service_container">
                      <div class="box">
                        <img src="images/s-1.jpg" alt="">
                        <h6 class="visible_heading">
                          CROSSFIT TRAINING
                        </h6>
                        <div class="link_box">
                          <a href="">
                            <img src="images/link.png" alt="">
                          </a>
                          <h6>
                            CROSSFIT TRAINING
                          </h6>
                        </div>
                      </div>
                      <div class="box">
                        <img src="images/s-2.jpg" alt="">
                        <h6 class="visible_heading">
                          FITNESS
                        </h6>
                        <div class="link_box">
                          <a href="">
                            <img src="images/link.png" alt="">
                          </a>
                          <h6>
                            FITNESS
                          </h6>
                        </div>
                      </div>
                      <div class="box">
                        <img src="images/s-3.jpg" alt="">
                        <h6 class="visible_heading">
                          DYNAMIC STRENGTH TRAINING
                        </h6>
                        <div class="link_box">
                          <a href="">
                            <img src="images/link.png" alt="">
                          </a>
                          <h6>
                            DYNAMIC STRENGTH TRAINING
                          </h6>
                        </div>
                      </div>
                      <div class="box">
                        <img src="images/s-4.jpg" alt="">
                        <h6 class="visible_heading">
                          HEALTH
                        </h6>
                        <div class="link_box">
                          <a href="">
                            <img src="images/link.png" alt="">
                          </a>
                          <h6>
                            HEALTH
                          </h6>
                        </div>
                      </div>
                      <div class="box">
                        <img src="images/s-5.jpg" alt="">
                        <h6 class="visible_heading">
                          WORKOUT
                        </h6>
                        <div class="link_box">
                          <a href="">
                            <img src="images/link.png" alt="">
                          </a>
                          <h6>
                            WORKOUT
                          </h6>
                        </div>
                      </div>
                      <div class="box">
                        <img src="images/s-6.jpg" alt="">
                        <h6 class="visible_heading">
                          STRATEGIES
                        </h6>
                        <div class="link_box">
                          <a href="">
                            <img src="images/link.png" alt="">
                          </a>
                          <h6>
                            STRATEGIES
                          </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              
                <!-- end service section -->
              
              
                <!-- Us section -->
              
                <section class="us_section layout_padding">
                  <div class="container">
                    <div class="heading_container">
                      <h2>
                        Why Choose Us
                      </h2>
                    </div>
                    <div class="us_container">
                      <div class="box">
                        <div class="img-box">
                          <img src="images/u-1.png" alt="">
                        </div>
                        <div class="detail-box">
                          <h5>
                            QUALITY EQUIPMENT
                          </h5>
                          <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          </p>
                        </div>
                      </div>
                      <div class="box">
                        <div class="img-box">
                          <img src="images/u-2.png" alt="">
                        </div>
                        <div class="detail-box">
                          <h5>
                            HEALTHY NUTRITION PLAN
                          </h5>
                          <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          </p>
                        </div>
                      </div>
                      <div class="box">
                        <div class="img-box">
                          <img src="images/u-3.png" alt="">
                        </div>
                        <div class="detail-box">
                          <h5>
                            SHOWER SERVICE
                          </h5>
                          <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          </p>
                        </div>
                      </div>
                      <div class="box">
                        <div class="img-box">
                          <img src="images/u-4.png" alt="">
                        </div>
                        <div class="detail-box">
                          <h5>
                            UNIQUE TO YOUR NEEDS
                          </h5>
                          <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              
                <!-- end us section -->
              
              
                <!-- client section -->
              
                <section class="client_section layout_padding">
                  <div class="container">
                    <div class="heading_container">
                      <h2>
                        What Says Our Customers
                      </h2>
                    </div>
                    <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
                        <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="box">
                            <div class="img-box">
                              <img src="images/client.png" alt="">
                            </div>
                            <div class="detail-box">
                              <h5>
                                Consectetur
                              </h5>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="box">
                            <div class="img-box">
                              <img src="images/client.png" alt="">
                            </div>
                            <div class="detail-box">
                              <h5>
                                Consectetur
                              </h5>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="box">
                            <div class="img-box">
                              <img src="images/client.png" alt="">
                            </div>
                            <div class="detail-box">
                              <h5>
                                Consectetur
                              </h5>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              
                  </div>
                </section>
              
                <!-- end client section -->
              
                <!-- result section -->
              
                <section class="result_section">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6 px-0">
                        <div class="img-box">
                          <img src="images/result-img.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-5">
                        <div class="detail-box">
                          <h2>
                            BUILT TO BRING <br>
                            BEST RESULTS
                          </h2>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                          </p>
                          <a href="">
                            Get A Quote
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              
                <!-- end result section -->
              
              
                <!-- contact section -->
                <section class="contact_section layout_padding">
                  <div class="container">
                    <div class="heading_container">
                      <h2>
                        <span>
                          Get In Touch
                        </span>
                      </h2>
                    </div>
                    <div class="layout_padding2-top">
                      <div class="row">
                        <div class="col-md-6 ">
                          <form action="">
                            <div class="contact_form-container">
                              <div>
                                <div>
                                  <input type="text" placeholder="Name" />
                                </div>
                                <div>
                                  <input type="email" placeholder="Email" />
                                </div>
                                <div>
                                  <input type="text" placeholder="Phone Number" />
                                </div>
                                <div class="mt-5">
                                  <input type="text" placeholder="Message" />
                                </div>
                                <div class="mt-5">
                                  <button type="submit">
                                    Send
                                  </button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="col-md-6">
                          <div class="map_container">
                            <div class="map-responsive">
                              <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                                allowfullscreen></iframe>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- end contact section -->
              
              
                <!-- info section -->
              
                <section class="info_section layout_padding2-top">
                  <div class="container">
                    <div class="info_form">
                      <h4>
                        Our Newsletter
                      </h4>
                      <form action="">
                        <input type="text" placeholder="Enter your email">
                        <div class="d-flex justify-content-end">
                          <button>
                            subscribe
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3">
                        <h6>
                          About Energym
                        </h6>
                        <p>
                          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                          minim veniam, quis nostrud exercitation u
                        </p>
                      </div>
                      <div class="col-md-2 offset-md-1">
                        <h6>
                          Menus
                        </h6>
                        <ul>
                          <li class=" active">
                            <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="">
                            <a class="" href="about.html">About </a>
                          </li>
                          <li class="">
                            <a class="" href="service.html">Services </a>
                          </li>
                          <li class="">
                            <a class="" href="#contactSection">Contact Us</a>
                          </li>
                          <li class="">
                            <a class="" href="#">Login</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h6>
                          Useful Links
                        </h6>
                        <ul>
                          <li>
                            <a href="">
                              Adipiscing
                            </a>
                          </li>
                          <li>
                            <a href="">
                              Elit, sed
                            </a>
                          </li>
                          <li>
                            <a href="">
                              do Eiusmod
                            </a>
                          </li>
                          <li>
                            <a href="">
                              Tempor
                            </a>
                          </li>
                          <li>
                            <a href="">
                              incididunt
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h6>
                          Contact Us
                        </h6>
                        <div class="info_link-box">
                          <a href="">
                            <img src="images/location-white.png" alt="">
                            <span> No.123, loram ipusm</span>
                          </a>
                          <a href="">
                            <img src="images/call-white.png" alt="">
                            <span>+01 12345678901</span>
                          </a>
                          <a href="">
                            <img src="images/mail-white.png" alt="">
                            <span> demo123@gmail.com</span>
                          </a>
                        </div>
                        <div class="info_social">
                          <div>
                            <a href="">
                              <img src="images/facebook-logo-button.png" alt="">
                            </a>
                          </div>
                          <div>
                            <a href="">
                              <img src="images/twitter-logo-button.png" alt="">
                            </a>
                          </div>
                          <div>
                            <a href="">
                              <img src="images/linkedin.png" alt="">
                            </a>
                          </div>
                          <div>
                            <a href="">
                              <img src="images/instagram.png" alt="">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              
                <!-- end info section -->
              
@endsection
@extends('footer')