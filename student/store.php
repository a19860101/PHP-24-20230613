<?php
    include('db.php');
    // var_dump($_REQUEST);
    extract($_REQUEST);
    $sql = 'INSERT INTO students(no,name,birth,gender,hobby,edu,comment)VALUES(?,?,?,?,?,?,?)';

    //預備陳述式
    $stmt = $pdo->prepare($sql);
    $hobby = implode(',',$hobby);
    $stmt->execute([$no,$name,$birth,$gender,$hobby,$edu,$comment]);

    // header('location:index.php');

    echo '<script>alert("資料已新增");</script>';
    header('refresh:0;url=index.php');