<?php
    // 類別
    class User {
        // 屬性
        public $name = 'JohnDoe';
        public $gender;
        private $access = true;
        protected $test = 'test';
        // private:只可使用在自己的類別內
        // protected:只可在類別內使用
        // 方法
        public function walk(){
            return $this->name.'walk';
        }
        public function fly(){
            return $this->test;
        }
    }
    $user_1 = new User;
    // echo $user_1->test;
    // echo $user_1->fly();

    class NPC extends User{
        public $hp = 'infinite';
        public function shake(){
            return $this->test;
        }
    }

    $npc_1 = new NPC;
    $npc_1->name = 'Ken';
    $npc_1->gender = 'Male';
    // echo $npc_1->walk();
    // echo $npc_1->fly();
    // echo $npc_1->access;
    // echo $npc_1->hp;
    // var_dump($npc_1);
    echo $npc_1->shake();
