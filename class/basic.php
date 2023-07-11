<?php
    // 類別
    class User {
        // 屬性
        public $name = 'JohnDoe';
        public $gender;
        // 方法
        public function walk(){
            return $this->name.'walk';
        }
        public function fly(){
            return $this->name.'fly';
        }
    }

    // 建立物件（實體）
    $user_1 = new User;
    // $user_1->name = 'Max';
    $user_1->gender = 'Male';
    echo $user_1->walk();
    echo $user_1->fly();
    // echo $user_1->name;

    // var_dump($user_1);

