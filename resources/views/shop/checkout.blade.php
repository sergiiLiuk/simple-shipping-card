@extends('layouts.app')
@section('title')
Shopping Cart
@endsection
@section('content')
<br>
<br> 
<div class="row">
    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto checkout-card">
        <div class="checkout-sum"><span><h4> <strong>Total Sum:</strong> {{$total}} DKK</h4></span></div>    
        <!--div id="charge-error" class="alert alert-danger hidden {{Session::has('error') ? 'hidden' : ''}}">
            {{Session::get('error')}}
        </div-->
          <!--div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div-->
        <form action="{{route('checkout')}}" method="post" id="checkout-form">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">            
                        <label for="name"><i class="fa fa-user"></i> Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>  
                <div class="col-md-12">
                    <div class="form-group">            
                        <label for="name"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div> 
                <div class="col-md-12">
                    <div class="form-group">            
                        <label for="name">Card Holder Name</label>
                        <input type="text" class="form-control" id="card-name" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">            
                        <label for="name">Creadit Card Number</label>
                        <input type="text" class="form-control" id="card-number" required>
                    </div>
                </div>  
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">            
                                <label for="card-expire-year">Exp Month</label>
                                <input type="text" class="form-control" id="card-expire-month" required>                       
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">            
                                <label for="card-expire-year">Exp Year</label>
                                <input type="text" class="form-control" id="card-expire-year" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">            
                        <label for="card-cvc">CVV</label>
                        <input type="text" class="form-control" id="card-cvc" required>
                    </div>
                </div>                
            </div>
            {{ csrf_field() }}         
            <button type="submit" class="btn checkout btn-success">Buy now</button> 
            <br>
            <br>                                     
        </div>                 
        <br>
        <br>
        </form>
    </div>
</div>
<br>
<br>
<br>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ URL::to('js/checkout.js') }}"></script>
@endsection