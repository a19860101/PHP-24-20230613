@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">分類標題</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">分類英文標題</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <input type="submit" value="新增分類" class="btn btn-primary">
            </form>
        </div>
        <div class="col-4">
            <ul class="list-group">
                @foreach($categories as $category)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{-- <a href="/category/{{$category->id}}/article"> --}}
                    <a href="{{route('category.article',$category->id)}}">
                        {{$category->title}}
                    </a>

                    <form action="{{route('category.destroy',$category->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除" class="btn btn-danger btn-sm" onclick="return confirm('確認刪除?')">
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection