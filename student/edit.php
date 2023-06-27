<?php
    include('db.php');
    extract($_REQUEST);
    $sql = 'SELECT * FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <div>
            <label for="">學號</label>
            <input type="text" name="no" value="<?php echo $student['no'];?>">
        </div>
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $student['name'];?>">
        </div>
        <div>
            <label for="">生日</label>
            <input type="date" name="birth" value="<?php echo $student['birth'];?>">
        </div>
        <div>
            <label for="">性別</label>

            <input type="radio" name="gender" value="男">
            <label for="">男</label>
            
            <input type="radio" name="gender" value="女">
            <label for="">女</label>

            <input type="radio" name="gender" value="隱藏">
            <label for="">隱藏</label>
        </div>
        <div>
            <label for="">興趣</label>

            <input type="checkbox" name="hobby[]" value="平面設計">
            <label for="">平面設計</label>

            <input type="checkbox" name="hobby[]" value="網頁設計">
            <label for="">網頁設計</label>

            <input type="checkbox" name="hobby[]" value="影片剪輯">
            <label for="">影片剪輯</label>
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="">--請選擇--</option>
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
            </select>
        </div>
        <div>
            <label for="">備註</label>
            <textarea name="comment" id="" cols="30" rows="10"><?php echo $student['comment'];?></textarea>
        </div>
        <input type="submit" value="儲存">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>