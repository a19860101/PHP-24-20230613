<?php
    include('../vendor/autoload.php');
    use App\Web\Controller\Post;
    $post = Post::edit($_REQUEST);
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
    <div class="container mx-auto flex">
        <div class="p-5 bg-zinc-300 w-full"> 
            <h2 class="text-4xl fon-bold mb-4">編輯文章</h2>
            <form action="update.php" method="post">
                <div>
                    <label for="">文章標題</label>
                    <input type="text" name="title" class="border border-zinc-500 w-full" value="<?php echo $post['title'];?>">
                </div>
                <div>
                    <label for="">文章分類</label>
                    <select name="category_id" id="category_id" class="border border-zinc-500 w-full">
                        <option>請選擇</option>
                        <option value="1" <?php echo $post['category_id'] == 1 ? 'selected':'';?>>科技</option>
                        <option value="2" <?php echo $post['category_id'] == 2 ? 'selected':'';?>>生活</option>
                    </select>
                </div>
                <div>
                    <label for="">文章內容</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="border border-zinc-500 w-full"><?php echo $post['body'];?></textarea>
                </div>
                <div>
                    <input type="hidden" value="<?php echo $post['id'];?>" name="id">
                    <input type="submit" value="更新文章" class="bg-sky-600 text-white inline-block px-5 py-2 rounded-lg">
                    <input type="button" value="取消" onclick="history.back()" class="bg-zinc-900 text-white inline-block px-5 py-2 rounded-lg">
                </div>
            </form>
        </div>
    </div>
</body>
</html>