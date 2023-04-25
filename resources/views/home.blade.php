@extends('header')
@section('main-section')
<section class="slider">
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


@endsection
@extends('footer')