<?php
    include('../vendor/autoload.php');
    App\Web\Controller\Post::update($_REQUEST);
    echo '<script>alert("文章已更新");</script>';
    header('refresh:0;url=index.php');