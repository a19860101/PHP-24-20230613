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

    class NPC extends User{
        public $hp = 'infinite';
    }

    $npc_1 = new NPC;
    $npc_1->name = 'Ken';
    $npc_1->gender = 'Male';
    echo $npc_1->walk();
    echo $npc_1->fly();
    echo $npc_1->hp;
    // var_dump($npc_1);
