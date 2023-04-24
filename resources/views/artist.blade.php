 @extends('header')
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
                        <p>{{$artist -> Description}}</p>
                        <button type="submit" style="width:25%;height:40px ;background-color: rgb(186, 51, 51); border-radius:5px" >
                            <i class="ti-shopping-cart" name="add-to-cart" style="padding-left:10px; color:white;font-style:initial"> Add list</i>
                        </button>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@extends('footer')