<?php
    namespace App\Web\Controller;
    use App\Web\Config\DB;
    use PDO;
    class Category {
        static function index(){
            $sql = 'SELECT * FROM categories';
            $categories = DB::pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $categories;
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO categories (title,slug,created_at)VALUES(?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title, $slug, DB::now()]);
        }
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM categories WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);

        }
    }