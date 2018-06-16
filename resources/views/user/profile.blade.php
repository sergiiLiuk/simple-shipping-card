@extends('layouts.app')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-md-8 mx-auto profile card">
    <br>
    <div class="prfile card-header bg-dark text-light">                
        My Orders             
        <div class="clearfix"></div>
    </div>    
    @foreach($orders as $order)
    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="list-group">
                @foreach($order->cart->items as $item)
                <li class="list-group-item">
                <span class="badge">{{$item['price']}} DKK</span>
                {{$item['item']['title']}} | {{$item['qty']}} Units
                </li>
                @endforeach
            </ul>
        </div>
        <div class="card-footer profile-total-price">  
            <div class="row">
                <div class="col-sm-6 col-md-12">
                    <div style="margin-left: 5px">                      
                        <strong>Total Price: {{$order->cart->totalPrice}} DKK</strong>                     
                    </div>
                </div>
            </div>               
        </div>
    </div>
    <br>
    @endforeach       
    </div>
</div>
<br><br><br>
@endsection