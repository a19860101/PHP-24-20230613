<?php
    class User {
        public $name = 'JohnDoe';
        // 建構子
        public function __construct(){
            echo '我是建構子';
        }
        //靜態方法(不可使用$this)
        static function test($name){
            return $name.'TEST';
        }
    }

    // echo User::test('QQQ');

    $user_1 = new User;
    $user_2 = new User;