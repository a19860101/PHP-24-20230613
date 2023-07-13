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
    <div class="container mx-auto py-5">
        <div class="w-2/3 mx-auto space-y-5">
            <?php foreach($posts as $post){ ?>
            <div class="border border-zinc-300 rounded-lg p-6">
                <h2 class="text-3xl font-bold"><?php echo $post['title'];?></h2>
                <div class="text-sm text-zinc-400"><?php echo $post['created_at'];?></div>
                <div>
                    <?php echo $post['category_id'];?>
                </div>
                <div>
                    <?php echo $post['body'];?>
                </div>
                <a href="show.php?id=<?php echo $post['id'];?>"class="bg-sky-600 text-white inline-block px-5 py-2 rounded-lg">繼續閱讀</a>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>