@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 col-sm-4 col-6">
            <img src="/images/{{$product->cover}}" alt="" class="w-100">
            <div class="py-3">
                <h4>{{$product->title}}</h4>
                <div>
                    @if($product->sale)
                    <del class="text-secondary">{{$product->price}}</del>
                    <div>{{$product->sale}}</div>
                    @else
                    <div>{{$product->price}}</div>
                    @endif
                </div>
                <form action="/cart" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="submit" class="btn btn-primary btn-sm" value="加入購物車">
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection