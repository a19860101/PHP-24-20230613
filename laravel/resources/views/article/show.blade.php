@extends('template.master')
@section('main')
    <h2>{{$article->title}}</h2>
    <div>
        <img src="/images/{{$article->cover}}" alt="" width="600">
    </div>
    <div>
        {{$article->body}}
    </div>
    {{-- <form action="/article/{{$article->id}}"> --}}
    <form action="{{route('article.destroy',$article->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
    </form>
    <a href="{{route('article.edit',$article->id)}}">編輯文章</a>
    <a href="{{route('article.index')}}">文章列表</a>
@endsection