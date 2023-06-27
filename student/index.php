<?php
    include('db.php');
    // require('db.php');
    $sql = 'SELECT * FROM students';
    $students = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // $result = $pdo->query($sql);
    // $students = $result->fetchAll(PDO::FETCH_ASSOC);
    var_dump($students);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>首頁</h1>
</body>
</html>