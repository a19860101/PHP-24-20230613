<?php
    session_start();

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

    <?php if(!isset($_SESSION['USER'])){?>
    <form action="store.php" method="post">
        <div>
            <label for="">帳號</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="">Mail</label>
            <input type="text" name="mail">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="pw">
        </div>
        <input type="submit" value="create session">
    </form>
    <?php } ?>
    <?php if(isset($_SESSION['USER'])){?>
    <div>
        <a href="delete.php">remove session</a>
    </div>
    <?php } ?>
    <div>
    
    <?php if(isset($_SESSION['USER'])){ ?>
        <div><?php echo $_SESSION['USER']['user'];?>妳好</div>       
        <div>您的密碼為<?php echo $_SESSION['USER']['pw'];?></div>
        <div>您的Mail為<?php echo $_SESSION['USER']['mail'];?></div>

    <?php } ?>
    </div>
</body>
</html>