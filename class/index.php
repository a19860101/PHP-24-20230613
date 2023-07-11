<?php
    include('User.php');
    include('Post.php');

    // echo User::index();
    // echo Post::index();

    // echo App\User::index();
    // echo Web\User::index();

    use App\Config\User;

    echo User::index();
    echo Web\User::index();