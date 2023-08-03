@extends('template.master')

@section('main')
    @foreach($articles as $article)
        <h2>{{$article->title}}</h2>
        <div>
            <img src="/images/{{$article->cover}}" alt="" width="200">
        </div>
        <div>
            {{$article->body}}
        </div>
        {{-- uri --}}
        <a href="article/{{$article->id}}">繼續閱讀</a>
        {{-- route name --}}
        <a href="{{route('article.show',$article->id)}}">繼續閱讀</a>
    @endforeach
@endsection