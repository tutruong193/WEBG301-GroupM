@extends('footer')
@section('main-content')
<div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Best <br> Design <br>of Furnitur</h1>
                           <p class="banner_text">It is a long established fact that a reader will bedistracted by the readable content of </p>
                           <div class="btn_main">
                              <div class="contact_bt"><a href="#">Contact US</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="https://www.hits943.com/wp-content/uploads/2021/10/3-ca-si-thong-tri-youtube-viet-nam-nguoi-dung-dau-luot-view-038901dc.jpg"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Best <br> Design <br>of Furnitur</h1>
                           <p class="banner_text">It is a long established fact that a reader will bedistracted by the readable content of </p>
                           <div class="btn_main">
                              <div class="contact_bt"><a href="#">Contact US</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="https://cand.com.vn/Files/Image/chienthang/2020/03/07/9af0fe26-0163-4f81-90ba-27c93e112191.jpg"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Best <br> Design <br>of Furnitur</h1>
                           <p class="banner_text">It is a long established fact that a reader will bedistracted by the readable content of </p>
                           <div class="btn_main">
                              <div class="contact_bt"><a href="#">Contact US</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i style="font-style: initial;">01</i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i style="font-style: initial;">02</i>
            </a>
         </div>
      </div>

<!-- <section class="slider">
        <div class="img-items">
            <div class="img fade">
                <img src="https://laplanhuocmo.com.vn/wp-content/uploads/2022/03/ca-si-top-1-viet-nam.png" alt="">
                <h2 class="img-heading">Kit</h2>
                <div class="text">Nội dung caption của slide đầu tiên!</div>
            </div>
            <div class="img fade">
                <img src="https://danhsach.top/wp-content/uploads/2019/03/Top-13-Ca-si-tre-co-giong-hat-hay-nhat-Viet-Nam-hien-nay.png" alt="">
                <h2 class="img-heading">Keycaps</h2>
                <div class="text">Nội dung caption của slide đầu tiên!</div>
            </div>
            <div class="img fade">
                <img src="https://image.phunuonline.com.vn/fckeditor/upload/2020/20200922/images/de-cu-nghe-si-viet-du-_931600770192.jpg" alt="">
                <h2 class="img-heading">Tools</h2>
                <div class="text">Nội dung caption của slide đầu tiên!</div>
            </div>
        </div>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(0)"></span> 
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
          </div>  
    </section> -->
<!-- <script>
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
  </script> -->
@endsection
@extends('header')