<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container mx-auto py-5 flex flex-wrap">
    <div class="w-2/3">
        <form action="store.php" method="post">
            <div class="my-3">
                <label for="">分類標題</label>
                <input type="text" name="title" class="p-2 border border-zinc-500 w-full">
            </div>
            <div class="my-3">
                <label for="">分類英文標題</label>
                <input type="text" name="slug" class="p-2 border border-zinc-500 w-full">
            </div>
            <div class="my-3">
                <input type="submit" value="新增分類" class="bg-sky-600 text-white inline-block px-5 py-2 rounded-lg">
            </div>
        </form>
    </div>
    <div class="w-1/3 p-5">
        <ul class="divide-y divide-blue-200">
            <li class="p-3">liste</li>
            <li class="p-3">liste</li>
            <li class="p-3">liste</li>
            <li class="p-3">liste</li>
        </ul>
    </div>
</div>
<?php include('../template/footer.php'); ?>