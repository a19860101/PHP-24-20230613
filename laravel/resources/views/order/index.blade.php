@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>我的訂單</h2>
            <table class="table">
                <tr>
                    <th>訂單編號</th>
                    <th>建立日期</th>
                </tr>
                @foreach($orders as $order)
                <tr>
                    <td>
                        <a href="/order/{{$order->id}}">{{$order->orderNo}}</a>
                    </td>
                    <td>{{$order->created_at}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection