<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            border: #f00 1px solid;
        }
    </style>
</head>
<body>
    <h1>建立文章</h1>
    <div>
        {{-- <form action="/article" method="post"> --}}
        <form action="{{route('article.store')}}" method="post">
            @csrf
            <div>
                <label for="">文章標題</label>
                <input type="text" name="title"
                        class="@error('title') error @enderror"
                >
                <span>
                    @error('title')
                       必填
                    @enderror
                </span>
            </div>
            <div>
                <label for="">內文</label>
                <textarea name="body" id="" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="建立文章">
        </form>
    </div>
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
    @endif
</body>
</html>