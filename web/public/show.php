<?php
    include('../vendor/autoload.php');
    use App\Web\Controller\Post;
    $post = Post::show($_REQUEST);
?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
    <div class="container mx-auto py-5">
        <div class="w-2/3 mx-auto space-y-5">
            <div class="border border-zinc-300 rounded-lg p-6">
                <h2 class="text-3xl font-bold"><?php echo $post['title'];?></h2>
                <div class="text-sm text-zinc-400"><?php echo $post['created_at'];?></div>
                <div>
                    <?php echo $post['category_id'];?>
                </div>
                <div>
                    <?php echo $post['body'];?>
                </div>
                <button class="bg-green-600 text-white inline-block px-5 py-2 rounded-lg" onclick="history.back()">返回</button>
                <a href="edit.php?id=<?php echo $post['id'];?>" class="bg-amber-600 text-white inline-block px-5 py-2 rounded-lg">編輯</a>
                <form action="delete.php" method="post">
                    <input type="hidden" value="<?php echo $post['id'];?>" name="id">
                    <input type="submit" value="刪除" class="bg-red-600 text-white inline-block px-5 py-2 rounded-lg" onclick="return confirm('確認刪除？')">
                </form>
            </div>
        </div>
    </div>
    <?php include('template/footer.php'); ?>