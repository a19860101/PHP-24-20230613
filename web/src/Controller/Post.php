<?php
    namespace App\Web\Controller;
    use App\Web\Config\DB;
    use PDO;
    class Post {
        static function index(){
            $sql = 'SELECT * FROM posts';
            $posts = DB::pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $posts;
        }
        static function show($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $post = $stmt->fetch(PDO::FETCH_ASSOC);
            return $post;
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts (title,body,category_id,created_at)VALUES(?,?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title, $body, $category_id, DB::now()]);
        }
    }