@extends('header')
@section('main-section')
<h1>t</h1>
 @foreach ($artists as $artist)
 <h1>{{$artist -> FirstName}}</h1>
 @endforeach
   
@endsection
@extends ('footer')