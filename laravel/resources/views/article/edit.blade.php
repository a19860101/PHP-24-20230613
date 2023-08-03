@extends('template.master')
@section('main')
    <h1>編輯文章</h1>
    <div>
        <form action="{{route('article.update',$article->id)}}" method="post">
            @csrf
            @method('patch')
            <div>
                <label for="">文章標題</label>
                <input type="text" name="title" value="{{$article->title}}">
            </div>
            <div>
                <label for="">內文</label>
                <textarea name="body" id="" cols="30" rows="10">{{$article->body}}</textarea>
            </div>
            <input type="submit" value="儲存文章">
            <input type="button" value="取消" onclick="history.back()">
        </form>
        <a href="{{route('article.index')}}">文章列表</a>
    </div>
    @endsection
    @section('side')
    <h1>side</h1>
    @endsection