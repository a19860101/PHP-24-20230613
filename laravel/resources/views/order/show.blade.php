@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>訂單 #</h2>
            {{$order}}
        </div>
    </div>
</div>
@endsection