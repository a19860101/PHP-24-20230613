@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">


    <h1>編輯文章</h1>
    <div>
        <form action="{{route('article.update',$article->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="" class='form-label'>文章標題</label>
                <input type="text" name="title" value="{{$article->title}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class='form-label'>分類</label>
                <select name="category_id" id="" class="form-control">
                    <option value='null'>--請選擇--</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" 
                        @if($category->id==$article->category_id) 
                        selected 
                        @endif>
                        {{$category->title}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="" class='form-label'>內文</label>
                <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
            </div>
            <input type="submit" value="儲存文章" class="btn btn-primary">
            <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
        </form>
        <a href="{{route('article.index')}}" class="btn btn-success">文章列表</a>
    </div>
</div>
</div>
</div>
    @endsection
    @section('side')
    <h1>side</h1>
@endsection