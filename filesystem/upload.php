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
    
    // 定義上傳資料夾名稱
    $folder = 'images/';
    
    //定義上傳目標
    $target = $folder.$fullname;

    //判斷上傳資料夾是否存在，如果不存在就自動產生
    if(!is_dir($folder)){
        mkdir($folder);
    }
    
    // 檔案上傳流程：本機 -> 暫存 -> 實際位置
    // if($error == 0){
    //     if(move_uploaded_file($tmp_name,$target)){
    //         echo '上傳成功';
    //     }else{
    //         echo '上傳失敗';
    //     }
    // }else{
    //     echo "錯誤碼#{$error}";
    // }
    switch($error){
        case 0:
            if(move_uploaded_file($tmp_name,$target)){
                echo '上傳成功';
            }else{
                echo '上傳失敗';
            }
            break;
        case 1:
            echo '上傳的文件超出了 php.ini 中的 upload_max_filesize 大小。';
            break;
        case 2:
            echo '上傳的文件超出了 HTML 表單中指定的 MAX_FILE_SIZE 大小。';
            break;
        case 3:
            echo '只有部分檔案上傳';
            break;
        case 4:
            echo '找不到檔案';
            break;
        case 6:
            echo '遺失暫存資料夾';
            break;
        case 7:
            echo '無法寫入磁碟';
            break;
        case 8:
            echo '系統無法使用檔案上傳功能';
            break;
    }

    header('refresh:3;url=index.php');
    // https://www.php.net/manual/en/features.file-upload.errors.php