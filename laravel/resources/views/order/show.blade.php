@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>訂單 #{{$order->orderNo}}</h2>
            @foreach($orderDetails as $detail)
            <div class="border mb-3 p-3 d-flex justify-content-between">
                <div>
                    {{$detail->product->title}}
                </div>
                <div>
                {{$detail->product->sale??$detail->product->price}}
                </div>
            </div>
            @endforeach
            <a href="#" onclick="history.back()">上一頁</a>
        </div>
    </div>
</div>
@endsection