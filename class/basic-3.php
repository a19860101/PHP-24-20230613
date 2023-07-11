<?php
    class User {
        public $name = 'JohnDoe';
        //靜態方法(不可使用$this)
        static function test($name){
            return $name.'TEST';
        }
    }

    echo User::test('QQQ');