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
                    {{$product->price}}
                </div>
                <form action="" method="post">
                    <input type="submit" class="btn btn-primary btn-sm" value="加入購物車">
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection