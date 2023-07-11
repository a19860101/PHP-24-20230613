<?php
    // 類別
    class User {
        // 屬性
        public $name = 'JohnDoe';
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
    $user_1->name = 'Max';
    $user_1->gender = 'Male';
    // echo $user_1->name;

    var_dump($user_1);

