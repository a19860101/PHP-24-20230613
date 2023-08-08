@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>分類"{{$category->title}}"的所有文章</h1>
        </div>
        @foreach($articles as $article)
        <div class="col-12">
            <h2>{{$article->title}}</h2>
        </div>
        @endforeach
    </div>
</div>
@endsection