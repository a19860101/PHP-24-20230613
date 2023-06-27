<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        ID
        學號
        姓名
        生日
        性別
        興趣
        學歷
        備註
     -->
    <form action="store.php" method="post">
        <div>
            <label for="">學號</label>
            <input type="text" name="no">
        </div>
        <div>
            <label for="">姓名</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">生日</label>
            <input type="date" name="birth">
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
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>