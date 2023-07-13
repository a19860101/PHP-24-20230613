<?php
    include('../vendor/autoload.php');
    use App\Web\Controller\Post;
    $posts = Post::index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="py-6 bg-zinc-800 flex px-4">
        <a href="#" class="text-white">LOGO</a>
        <div class="ml-auto space-x-3">
            <a href="index.php" class="text-white">首頁</a>
            <a href="create.php" class="text-white">新增文章</a>
        </div>
    </nav>
    <div class="container mx-auto">
        <div class="w-2/3 mx-auto">
            <?php foreach($posts as $post){ ?>
            <div class="border border-zinc-300 rounded-lg p-6">
                <h2><?php echo $post['title'];?></h2>
                <div>
                    <?php echo $post['category_id'];?>
                </div>
                <div>
                    <?php echo $post['body'];?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>