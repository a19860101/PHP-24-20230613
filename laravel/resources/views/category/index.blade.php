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
    </div>
</div>
@endsection