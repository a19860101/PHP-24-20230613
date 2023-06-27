<?php
    include('db.php');
    extract($_REQUEST);
    $sql = 'SELECT * FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($student);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>學號：<?php echo $student['no'];?></li>
        <li>姓名：<?php echo $student['name'];?></li>
        <li>生日：<?php echo $student['birth'];?></li>
        <li>性別：<?php echo $student['gender'];?></li>
        <li>學歷：<?php echo $student['edu'];?></li>
        <li>興趣：<?php echo $student['hobby'];?></li>
        <li>備注：<?php echo $student['comment'];?></li>
    </ul>
    <a href="edit.php?id=<?php echo $student['id'];?>">編輯</a>
    <form action="" method="post">
        <input type="submit" value="刪除">
    </form>
    <input type="button" value="取消" onclick="history.back()">
</body>
</html>