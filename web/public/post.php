<?php
    include('../vendor/autoload.php');

    use App\Test\Post;

    echo App\Test\Post::go();
    echo Post::go();
    echo App\Test\Product::go();