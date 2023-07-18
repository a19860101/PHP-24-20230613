<?php
    include("../vendor/autoload.php");

    App\Web\Controller\Post::delete($_REQUEST);
    echo '<script>alert("文章已刪除");</script>';
    header('refresh:0;url=index.php');