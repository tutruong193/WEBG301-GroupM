
@extends('header')
@section('main-section')
<header>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</header>
<div class="sanpham">
        <div class="container">
            <p style="font-size: 30px; font-weight:bold; padding:20px">Information of {{$artist -> FirstName}} {{$artist -> LastName}}</p>
            <div class="product-content row" >
                <div class="product-content-left row"  >
                    <div class="product-content-left-big-img" >
                        <img src="{{$artist -> Img}}" alt="" >
                        <input type="text" class="form-control" id="artist_Img" name="artist_Img" value="{{$artist -> Img}}">
                    </div>
                </div>
                <div class="product-content-right" style="width: 50%">
                <form action="{{ route('requests.store') }}" method="post">
                @csrf
                        <div class="product-content-right-product-name">
                            <p style="font-size:20px;color:black;font-weight:bold;">{{$artist -> FirstName}} {{$artist -> LastName}}</p>
                            <input type="text" class="form-control" id="artist_FirstName" name="artist_FirstName" value="{{$artist -> FirstName}}">
                            <input type="text" class="form-control" id="artist_LastName" name="artist_LastName" value="{{$artist -> LastName}}">
                            <input type="text" class="form-control" id="artist_id" name="artist_id" value="{{$artist -> id}}">
                        </div>
                        <div class="product-content-right-product-birthdate">
                            <p>{{$artist -> BirthDate}}</p>
                        </div>
                        <div class="product-content-right-product-description">
                            <p>{{$artist -> Price}}</p> 
                            <input type="text" class="form-control" id="artist_Price" name="artist_Price" value="{{$artist -> Price}}">
                        </div>
                        <div class="product-content-right-product-description">
                            <p>{{$artist -> Description}}</p> 
                            
                        </div>
                        <div class="product-content-right-product-button" style="text-align: center">
                            <button type="submit" id="addBtn" style="width:25%;height:40px ;background-color: rgb(186, 51, 51); border-radius:5px; " >
                                <i class="ti-shopping-cart" name="add-to-cart" style="padding-left:10px; color:white;font-style:initial"> Add list</i>
                            </button>
                        </div>
                </form>
                </div>
            </div>
        </div>

    </div>
    
@endsection
@extends ('footer')
