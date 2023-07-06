<?php
    include('db.php');

    function store($request){
        extract($request);
        $sql = 'INSERT INTO users(user,password,created_at)VALUES(?,?,?)';
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