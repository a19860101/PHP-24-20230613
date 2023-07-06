<?php
    include('db.php');

    function store($request){
        extract($request);
        $sql = 'INSERT INTO users(user,password,created_at)VALUES(?,?,?)';
        if(chkUser($user) != 0){
            return chkUser($user);
        }
        try{
            $stmt = pdo()->prepare($sql);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $stmt->execute([$user,$password,now()]);
            return [
                'errCode' => 0,
                'status' => '註冊成功'
            ];
        }catch(PDOException $e){
            echo $e->getMessage();
            return [
                'errCode' => 1,
                'status' => '註冊失敗'
            ];
        }
    }
    function chkUser($user){
        $sql = 'SELECT * FROM users WHERE user = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$user]);
        if($stmt->rowCount() > 0){
            return [
                'errCode' => 2,
                'status' => '帳號重複，請重新註冊'
            ];
        }else{
            return 0;
        }
    }