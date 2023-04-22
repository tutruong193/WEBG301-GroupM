@extends('header')
@section('main-section')
<head>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<div class="slider">
    <div class="img-items">
        <div class="img fade">
            <img src="#" alt="">
            <h2 class="img-heading">Singer</h2>
            <div class="text">{{xxx}}</div>
        </div>
        <div class="img fade">
            <img src="#" alt="">
            <h2 class="img-heading">Rapper</h2>
            <div class="text">{{xxx}}</div>
        </div>
        <div class="img fade">
            <img src="#" alt="">
            <h2 class="img-heading">gitarist</h2>
            <div class="text">{{xxx}}</div>
        </div>
    </div>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
      </div>  
</div>
   
@endsection
@extends ('footer')