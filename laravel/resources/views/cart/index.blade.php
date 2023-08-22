@extends('template.master')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        @foreach($carts as $cart)
        <div class="col-6 pb-4">
            <div class="border">
                <h3>{{$cart->product_id}}</h3>
            </div>
        </div>
        <div class="w-100"></div>
        @endforeach
    </div>
</div>
@endsection