<?php
    include('db.php');
    extract($_REQUEST);

    $sql = 'UPDATE students SET no=?,name=?,birth=?,gender=?,hobby=?,edu=?,comment=? WHERE id=?';
    $stmt = $pdo->prepare($sql);
    $hobby = implode(',',$hobby);
    $stmt->execute([$no,$name,$birth,$gender,$hobby,$edu,$comment,$id]);

    echo '<script>alert("資料已更新");</script>';
    header('refresh:0;url=index.php');