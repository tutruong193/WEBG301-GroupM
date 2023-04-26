 @extends('footer')
 @section('main-content')
 <div class="design_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="design_taital">List Artist</h1>
                     <div class="design_section_2">
                        <div class="row">
                        @foreach($artists as $artist)
                           <div class="col-md-4" style="padding:15px;">
                              <div class="box_main">
                                 <p class="chair_text">{{$artist -> FirstName}} {{$artist -> LastName}}</p>
                                 <div class="image_3" href="#"><img src="{{$artist -> Img}}" style="Height:75px;overflow: hidden;object-fit: cover;"></div>
                                 <p class="chair_text">Price: {{$artist -> Price}}</p>
                                 <div class="buy_bt"><a href="{{ route('artists.show', $artist->id) }}">Detail</a></div>
                              </div>
                           </div>
                        @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<!-- <div id="cartegory">
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
</div> -->
@endsection
@extends('header')