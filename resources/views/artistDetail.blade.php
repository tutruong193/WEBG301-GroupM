
@extends('header')
@section('main-section')
<header>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</header>
<div class="sanpham">
        <div class="container">
            <div class="product-top row">
                <p>Home</p><i class="ti-angle-right"></i>
                <p>{{$artist -> FirstName}} {{$artist -> LastName}}</p>
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="{{$artist -> Img}}" alt="" style="width: 700px; height:700px">

                    </div>
                </div>
                <div class="product-content-right">
                   
                        <div class="product-content-right-product-name">
                            <p style="font-size:20px;color:black;font-weight:bold;">{{$artist -> FirstName}} {{$artist -> LastName}}</p>
                        </div>
                        <div class="product-content-right-product-birthdate">
                            <p>{{$artist -> BirthDate}}</p>
                        </div>
                        <div class="product-content-right-product-description">
                            <p>{{$artist -> Description}}</p> 
                        </div>
                        <div class="product-content-right-product-button">
                            <button type="submit" style="width:200px;height:40px ;background-color: rgb(186, 51, 51); border-radius:5px" >
                                <i class="ti-shopping-cart" name="add-to-cart" style="padding-left:10px; color:white;font-style:initial"> Add list</i>
                            </button>
                        </div>
                  
                   
                </div>
            </div>
        </div>

    </div>
@endsection
@extends ('footer')
