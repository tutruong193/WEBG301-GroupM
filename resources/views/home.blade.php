@extends('header')
@section('main-section')
<section class="slider">
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
            </div>
@endsection
@extends('footer')