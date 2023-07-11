<?php
    // 類別
    class User {
        // 屬性
        public $name;
        public $gender;
        // 方法
        public function walk(){
            return 'walk';
        }
        public function fly(){
            return 'fly';
        }
    }

    // 建立物件（實體）
    $user_1 = new User;

    var_dump($user_1);

