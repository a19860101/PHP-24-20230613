<?php
    include('../vendor/autoload.php');

    use App\Web\Product;

    echo App\Web\Post::go();
    echo App\Web\Product::go();
    echo Product::go();