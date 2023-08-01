<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{$article->title}}</h2>
    <div>
        {{$article->body}}
    </div>
    {{-- <form action="/article/{{$article->id}}"> --}}
    <form action="{{route('article.destroy',$article->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="刪除">
    </form>
</body>
</html>