<?php
    session_start();
    if(isset($_SESSION['USER'])){
        echo $_SESSION['USER'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        session 伺服器上的暫存檔

     -->
    <form action="store.php" method="post">
        <input type="text" name="user">
        <input type="submit" value="create session">
    </form>

    <a href="delete.php">remove session</a>
</body>
</html>