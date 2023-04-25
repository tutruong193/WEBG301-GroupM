


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/giaodien.css')}}">
  <link rel="stylesheet" href="{{asset('icon/themify-icons/themify-icons.css')}}">

</head>
<div class = "header">
        <div id="header">
            <!--begin-->
                <ul id="nav">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('introduction')}}" >Introduction</a></li>
                    <li><a href="{{route('artistlist')}}" >Artist List</a></li>
                    <li><a href="{{route('contact')}}" >Contacts</a></li>
                </ul>
                <!--end nav-->
                <!--begin search button-->
                <div class="btn row">
                    <div class="btn_user">
                    <a href="/edit"><i class="search-icon ti-user"></i></a>
                    </div>
                    <div class="btn_giohang">
                    <a href="./giohang.php"><i class="shopping-icon ti-shopping-cart-full"></i></a>
                    </div>
                    <div class="btn_logout">
                    <a href="/logout"><i class="ti-share logout-icon"></i></a>
                    </div>
                    
                </div>
            </div>
    </div>
  

@yield('main-content')