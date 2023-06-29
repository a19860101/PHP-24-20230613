<?php
    // var_dump($_FILES);
    extract($_FILES['img']);
    // echo $_FILES['img']['name'];
    // echo '<br>';
    // echo $_FILES['img']['type'];
    // echo '<br>';
    // echo $_FILES['img']['tmp_name'];
    // echo '<br>';
    // echo $_FILES['img']['error'];
    // echo '<br>';
    // echo $_FILES['img']['size'];
    // echo '<br>';
    // echo $name;
    // echo '<br>';
    // echo $type;
    // echo '<br>';
    // echo $tmp_name;
    // echo '<br>';
    // echo $error;
    // echo '<br>';
    // echo $size;
    // echo '<br>';

    //隨機產生檔案名稱
    $img_name = md5(time());
    //取得副檔名
    $img_ext = pathinfo($name,PATHINFO_EXTENSION);
    //完整檔名
    $fullname = $img_name.'.'.$img_ext;
    
    //定義上傳位置
    $target = 'images/'.$fullname;
    
    // 檔案上傳流程：本機 -> 暫存 -> 實際位置
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo '上傳成功';
        }else{
            echo '上傳失敗';
        }
    }else{
        echo "錯誤碼#{$error}";
    }