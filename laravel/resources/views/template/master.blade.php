<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('article.index')}}">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">文章首頁</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{route('article.create')}}">新增文章</a>
              </li>
              @endauth
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">分類管理</a>
              </li>
              <li class="nav-item">
                <a href="{{route('front.product.index')}}" class="nav-link">所有商品</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                </a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">{{Auth::user()->name}}</a>
              </li>
              @endauth
              @guest
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('login')}}">登入</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('register')}}">註冊</a>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
    @yield('main')
    @yield('side')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>