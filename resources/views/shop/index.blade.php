@extends('layouts.app')
@section('title')
Shopping Cart
@endsection
@section('content')
@if(Session::has('success'))
<br>
<div class="row">
  <div class="col-md-4 mx-auto">
    <div id="charge-message" class="alert alert-success">
      {{Session::get('success')}}
    </div>
  </div>
</div>
@endif 
 
<div class="row justify-content-center">
@foreach($products as $product)
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
  <br>
  <br>
    <div class="thumbnail text-center">
      <img src="{{$product->imagePath}}" alt="Bike Info" class="img-responsive">
      <div class="caption">
        <p class="title">{{$product->title}}</p>
        <div class="overlay"></div>
        <div class="btn-add-to-cart clearfix"><a href="{{ route('product.addToCart', ['id' => $product->id]) }}"> Add To Cart </a></div>
        <!--span class="product-title"><h5>{{$product->title}}</h5></span-->
        <!--p class="description">{{$product->description}}</p-->
        <div class="price">Price {{$product->price}} DKK</div>
      </div>
    </div>
    <br>
  </div>
@endforeach
</div>
<br>
<br>
@endsection