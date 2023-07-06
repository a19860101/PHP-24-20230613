<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
</head>
<body>
    <nav>
        <a href="index.php">logo</a>
        <div>
            <a href="login.php">登入</a>
            <a href="register.php">註冊</a>
            <a href="logout.php">登出</a>
        </div>
    </nav>
    <h1>登入</h1>
    <form action="store.php" method="post">
        <div>
            <label for="">帳號</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="登入">
    </form>
</body>
</html>