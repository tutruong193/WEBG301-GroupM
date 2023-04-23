@extends('header')
@section('main-section')

<div class="cartegory-products row">
                    @foreach($artists as $artist)
                        <div class="cartegory-kit-products-item">
                            <a href="{{route('artists.show', $artist->id)}}" name="cartegory_choice">
                            <img src="{{$artist ->Img}}" alt="">
                            <h1></h1>
                            <p>$</p>
                            </a>
                        </div>
                  @endforeach
            </div>
@endsection
@extends('footer')