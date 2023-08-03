@extends('template.master')
@section('main')
<h1>建立文章</h1>
<div>
    {{-- <form action="/article" method="post"> --}}
    <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title"
                    class="@error('title') error @enderror"
                    value="{{old('title')}}"
            >
            <span>
                @error('title')
                   必填
                @enderror
            </span>
        </div>
        <div>
            <label for="">文章封面</label>
            <input type="file" name="cover">
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="body" id="" cols="30" rows="10">{{old('body')}}</textarea>
        </div>
        <input type="submit" value="建立文章">
    </form>
</div>
@if($errors->any())
    @foreach($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
@endif
@endsection