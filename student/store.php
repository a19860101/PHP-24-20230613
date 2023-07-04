<?php
    include('db.php');

    // extract($_FILES['avatar']);
    extract($_REQUEST);

    $avatar_name = $_FILES['avatar']['name'];
    $tmp_name = $_FILES['avatar']['tmp_name'];
    $error = $_FILES['avatar']['error'];

    //隨機產生檔案名稱
    $img_name = md5(time());
    //取得副檔名
    $img_ext = pathinfo($avatar_name,PATHINFO_EXTENSION);
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

    $sql = 'INSERT INTO students(no,name,avatar,birth,gender,hobby,edu,comment)VALUES(?,?,?,?,?,?,?,?)';



    switch($error){
        case 0:
            if(move_uploaded_file($tmp_name,$target)){
                //預備陳述式
                $stmt = $pdo->prepare($sql);
                $hobby = implode(',',$hobby);
                $stmt->execute([$no,$name,$fullname,$birth,$gender,$hobby,$edu,$comment]);
                echo '<script>alert("資料已新增");</script>';
                header('refresh:0;url=index.php');
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
            // echo '找不到檔案';
            $fullname = null;
            $stmt = $pdo->prepare($sql);
            $hobby = implode(',',$hobby);
            $stmt->execute([$no,$name,$fullname,$birth,$gender,$hobby,$edu,$comment]);
            echo '<script>alert("資料已新增");</script>';
            // header('refresh:0;url=index.php');
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



    // var_dump($_REQUEST);



    // header('location:index.php');

 