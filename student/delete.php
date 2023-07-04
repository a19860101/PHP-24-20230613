<?php
    include('db.php');
    extract($_REQUEST);

    $sql_avatar = 'SELECT avatar FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql_avatar);
    $stmt->execute([$id]);

    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($student['avatar']!=null){
        unlink('images/'.$student['avatar']);
    }


    $sql = 'DELETE FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    echo '<script>alert("資料已刪除");</script>';
    header('refresh:0;url=index.php');