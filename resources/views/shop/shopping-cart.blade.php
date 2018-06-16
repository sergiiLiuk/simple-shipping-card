@extends('layouts.app')
@section('title')
Shopping Cart
@endsection
@section('content')

@if(Session::has('cart'))
<br>
<br>
<div class="container">
   <div class="card">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Shipping cart                
            <div class="clearfix"></div>
        </div>        
        <div class="card-body">  
            <div class="row card-row-header">
                <div class="col-12 col-sm-12 d-none d-md-block text-md-left col-md-6">
                    <h4 class="product-name"><strong>&nbsp &nbsp Product Name</strong></h4>
                </div>
                <div class="col-12 col-sm-12 col-md-6 row">
                    <div class="col-3 col-sm-3 d-none d-md-block col-md-6 text-md-left" style="padding-top: 5px">
                        <span classs="product-price-qty"> <strong>Price &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Qty</strong> </span>                            
                    </div>                      
                    <div class="col-sm-2 d-none d-md-block col-md-4" style="padding-top: 5px">  
                        <span class="product-sum"><strong>Sum</strong> </span>                                                                          
                    </div>
                </div>
            </div>
            @foreach($products as $product) 
            <ul class="list-group">          
                <li class="list-group-item">
                    <!-- PRODUCT -->                                  
                    <div class="row">
                        <!--div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </div-->
                        <div class="col-12 text-left col-md-6">
                            <h5 class="product-name"><strong>{{$product['item']['title']}}</strong></h5>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 row ">
                            <div class="col-xs-4 col-sm-4 col-md-6" style="padding-top: 5px">
                                <span class="product-price-qty"> <strong>{{ $product['item']['price'] }} <span class="text-muted">&nbsp x &nbsp</span> {{$product['qty']}}</strong></span>                             
                            </div>                      
                            <div class="col-xs-4 col-sm-4 col-md-4 " style="padding-top: 5px">  
                                <span class="product-sum"><strong>{{ $product['price'] }}</strong></span>                                                                            
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-2 text-right">                                                             
                                <a type="button" class="btn btn-outline-danger btn-xs" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>                                                               
                            </div>
                        </div>
                    </div>                        
                </li>
            </ul>
            @endforeach            
        </div>    
        <div class="card-footer">  
            <div class="row">
                <div class="col-sm-6 col-md-9">
                    <div class="pull-left" style="margin: 10px">                      
                        Total price: <b>{{ $totalPrice }} DKK</b>                      
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">                        
                    <a href="{{ route('checkout') }}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a>
                </div>
            </div>               
        </div>
    </div>
</div>
@else
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <h2>No items in cart!</h2>
        </div>
    </div>
@endif
<br>
<br>
<br>
@endsection

 