<?php
    include('../vendor/autoload.php');
    use App\Web\Controller\Post;
    use App\Web\Controller\Category;
    $post = Post::edit($_REQUEST);
    $categories = Category::index();
?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
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
                        <?php foreach($categories as $category){ ?>
                        <option value="<?php echo $category['id'];?>" <?php echo $post['category_id'] == $category['id'] ? 'selected':'';?>><?php echo $category['title'];?></option>
                        <?php } ?>
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
    <?php include('template/footer.php'); ?>