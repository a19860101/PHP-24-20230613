@extends('template.master')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-md-8 col-10">
<h1>建立文章</h1>
<div>
    {{-- <form action="/article" method="post"> --}}
    <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">文章標題</label>
            <input type="text" name="title"
                    class="@error('title') error @enderror form-control"
                    value="{{old('title')}}"
            >
            <span>
                @error('title')
                   必填
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">文章標籤</label>
            <input type="text" name="tag" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">文章分類</label>
            <select name="category_id" id="" class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">文章封面</label>
            <input type="file" name="cover" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">內文</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{old('body')}}</textarea>
        </div>
        <input type="submit" value="建立文章" class="btn btn-primary">
    </form>
</div>
@if($errors->any())
    @foreach($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
@endif
</div>
</div>
</div>
@endsection