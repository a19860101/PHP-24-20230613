<?php
    include('../vendor/autoload.php');
    use App\Web\Controller\Post;
    $posts = Post::index();
?>

<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
    <div class="container mx-auto py-5">
        <div class="w-2/3 mx-auto space-y-5">
            <?php foreach($posts as $post){ ?>
            <div class="border border-zinc-300 rounded-lg p-6">
                <h2 class="text-3xl font-bold"><?php echo $post['title'];?></h2>
                <div class="text-sm text-zinc-400"><?php echo $post['created_at'];?></div>
                <div>
                    分類：<?php echo $post['category_title'];?>
                </div>
                <div>
                    <?php echo $post['body'];?>
                </div>
                <a href="show.php?id=<?php echo $post['id'];?>"class="bg-sky-600 text-white inline-block px-5 py-2 rounded-lg">繼續閱讀</a>
            </div>
            <?php } ?>
        </div>
    </div>
<?php include('template/footer.php');?>