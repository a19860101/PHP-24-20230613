@extends('template.master')
@section('main')
    
<div class="container">
    <div class="row justify-content-center">
        @foreach($articles as $article)
        <div class="col-lg-8 col-10 gy-4">
            <div class="border border-dark rounded p-4">
                <h2>{{$article->title}}</h2>
                <small>分類:{{$article->category->title??'未定義';}}</small>
                <div>
                    <img src="/images/{{$article->cover}}" alt="" width="200">
                </div>
                <div>
                    {{$article->body}}
                </div>
                {{-- uri --}}
                <a href="article/{{$article->id}}" class="btn btn-primary">繼續閱讀</a>
                {{-- route name --}}
                <a href="{{route('article.show',$article->id)}}" class="btn btn-primary">繼續閱讀</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
