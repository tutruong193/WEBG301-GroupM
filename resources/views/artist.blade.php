 @extends('header')
<head>
    <link rel="stylesheet" href="{{asset('css/giaodien.css')}}">
</head>

<div id="cartegory">
    <h1 class="cartegory-heading-big">
        ALL ARTISTS
    </h1>
    <div class="cartegory-kit">
        <div class="cartegory-products row">
              @foreach($artists as $artist)
              
                    <div class="cartegory-kit-products-item">
                    <a href="{{ route('artists.show', $artist->id) }}" id="">
                        <img src="{{$artist -> Img}}" alt="">
                        <h1>{{$artist -> FirstName}} {{$artist -> LastName}}</h1>
                        <p>{{$artist ->BirthDate }}</p>
                        <p>{{$artist -> Description}}</p>
                        <button type="submit" >
                            <i class="ti-shopping-cart" name="add-to-cart" style="padding-left:10px; color:white;font-style:initial"> Add list</i>
                        </button>
                        </a>
                    </div>
                
                @endforeach
            </div>
        </div>
    </div>
</div>
@extends('footer')