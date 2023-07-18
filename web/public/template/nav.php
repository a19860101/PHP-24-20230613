<?php
    $webroot = 'http://localhost:8888/PHP-24-20230613/web/public/';
?>
<nav class="py-6 bg-zinc-800 flex px-4">
    <a href="#" class="text-white">LOGO</a>
    <div class="ml-auto space-x-3">
        <a href="<?php echo "{$webroot}index.php";?>" class="text-white">首頁</a>
        <a href="<?php echo "{$webroot}create.php";?>" class="text-white">新增文章</a>
        <a href="<?php echo "{$webroot}category/index.php";?>" class="text-white">分類管理</a>
    </div>  
</nav>