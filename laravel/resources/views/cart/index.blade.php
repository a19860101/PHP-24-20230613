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
                <form action="{{route('cart.delete',$cart->id)}}" method='post'>
                    @csrf
                    @method('delete')
                    <input type="submit" value="移除" class="btn btn-danger btn-sm">
                </form>
            </div>
        </div>
        <div class="w-100"></div>
        @endforeach
        <div class="col-lg-6 col-md-8 col-10 pb-4 d-flex justify-content-between">
            @if($cart_number > 0)
            <form action="{{route('cart.empty')}}" method="post">
                @csrf
                <input type="submit" class="btn btn-outline-danger btn-sm" value="清空">
            </form>
            @else
            <div>
                購物車是空的，還不快去買？
            </div>
            @endif
            總計 {{$total}}
        </div>
    </div>
</div>
@endsection