<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $title = '文章標題';
        $user = '王小明';
        // return view('post.index')->with([
        //     'my_title'=>$title,
        //     'author' => $user
        // ]);
        return view('post.index',[
            'my_title'=>$title,
            'author' => $user
        ]);
    }
}
