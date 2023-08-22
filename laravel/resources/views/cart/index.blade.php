@extends('template.master')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        @foreach($carts as $cart)
        <div class="col-lg-6 col-md-8 col-10 pb-4">
            <div class="border p-3">
                <h3>{{$cart->product->title}}</h3>
                <div>
                    NT.{{$cart->product->price}}
                </div>
            </div>
        </div>
        <div class="w-100"></div>
        @endforeach
        <div class="col-lg-6 col-md-8 col-10 pb-4 text-end">
            總計 {{$total}}
        </div>
    </div>
</div>
@endsection