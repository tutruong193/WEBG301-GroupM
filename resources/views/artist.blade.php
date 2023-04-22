 @extends('header')
<head>
    <link rel="stylesheet" href="{{asset('css/artistDetail.css')}}">
</head>
<div id="cartegory">
    <h1 class="cartegory-heading-big">
        ALL THE PRODUCTS
    </h1>
    <div class="cartegory-kit">
        <div class="cartegory-products row">
              @foreach($artists as $artist)
              <a href="{{ route('artists.show', $artist->id) }}" id="">
                    <div class="cartegory-kit-products-item">
                        <img src="{{$artist -> Img}}" alt="">
                        <h1>{{$artist -> FirstName}} {{$artist -> LastName}}</h1>
                        <p>{{$artist ->BirthDate }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@extends('footer')