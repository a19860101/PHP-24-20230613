<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
    <div class="container mx-auto flex">
        <div class="p-5 bg-zinc-300 w-full"> 
            <h2 class="text-4xl fon-bold mb-4">建立文章</h2>
            <form action="store.php" method="post">
                <div>
                    <label for="">文章標題</label>
                    <input type="text" name="title" class="border border-zinc-500 w-full">
                </div>
                <div>
                    <label for="">文章分類</label>
                    <select name="category_id" id="category_id" class="border border-zinc-500 w-full">
                        <option>請選擇</option>
                        <option value="1">科技</option>
                        <option value="2">生活</option>
                    </select>
                </div>
                <div>
                    <label for="">文章內容</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="border border-zinc-500 w-full"></textarea>
                </div>
                <div>
                    <input type="submit" value="建立文章" class="bg-sky-600 text-white inline-block px-5 py-2 rounded-lg">
                    <input type="button" value="取消" onclick="history.back()" class="bg-zinc-900 text-white inline-block px-5 py-2 rounded-lg">
                </div>
            </form>
        </div>
    </div>
<?php include('template/footer.php'); ?>