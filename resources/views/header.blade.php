
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/giaodien.css')}}">
    <link rel="stylesheet" href="{{asset('icon/themify-icons/themify-icons.css')}}">
    
    
</head>
<body>
    
    <div class = "header">
        <div id="header">
            <!--begin-->
                <ul id="nav">
                    <li><a href="{{asset('home')}}">Home</a></li>
                    <li><a href="#" onclick="smoothScroll(document.getElementById('introduction'))">Introduction</a></li>
                    <li><a href="#" onclick="smoothScroll(document.getElementById('artist.blade.php'))">Products</a></li>
                    <li><a href="{{asset('contact')}}" >Contacts</a></li>
                </ul>
                <!--end nav-->
                <!--begin search button-->
                <div class="btn row">
                    <!-- <div class="btn_searching row">
                    <form action="./hienthi_search.php" method="post">
                        <input type="text" name="searching_name">
                        <button type ="submit"><i class="ti-search"></i>
                    </form>
                    </div> -->
                    <div class="btn_user">
                    <a href="{{asset('artist')}}"><i class="search-icon ti-user"></i></a>
                    </div>
                    <div class="btn_giohang">
                    <a href="./giohang.php"><i class="shopping-icon ti-shopping-cart-full"></i></a>
                    </div>
                    <div class="btn_logout">
                    <a href="./logout.php"><i class="ti-share logout-icon"></i></a>
                    </div>
                    
                </div>
            </div>
    </div>
@yield('main-content')