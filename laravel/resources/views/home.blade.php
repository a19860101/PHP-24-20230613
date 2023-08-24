<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>HOME</h1>
    <form action="/search" method="get">
        @csrf
        <input type="text" name="input">
        <input type="submit" value="搜尋">
    </form>
</body>
</html>