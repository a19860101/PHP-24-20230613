<?php
    include('db.php');
    // require('db.php');
    $sql = 'SELECT * FROM students';
    $students = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // $result = $pdo->query($sql);
    // $students = $result->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($students);
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
    <a href="create.php">新增學員資料</a>
    <table border="1" width="600">
        <tr>
            <th>編號</th>
            <th>學號</th>
            <th>姓名</th>
            <th>生日</th>
            <th>性別</th>
            <th>學歷</th>
        </tr>
        <?php foreach($students as $student){ ?>
            <tr>
                <td><?php echo $student['id'];?></td>
                <td><?php echo $student['no'];?></td>
                <td><?php echo $student['name'];?></td>
                <td><?php echo $student['birth'];?></td>
                <td><?php echo $student['gender'];?></td>
                <td><?php echo $student['edu'];?></td>
            </tr>
        <?php } ?>
    </table>
    </body>
</html>