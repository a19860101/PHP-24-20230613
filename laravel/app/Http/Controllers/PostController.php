<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //raw
        // $posts = DB::select('SELECT * FROM posts');

        // query builder
        $posts = DB::table('posts')->get();

        // return view('post.index')->with(['posts' => $posts]);
        // return view('post.index',['posts' => $posts]);
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //raw 最接近原生sql寫法

        // DB::insert('INSERT INTO posts(title, cover, body, created_at, updated_at)VALUES(?,?,?,?,?)',[
        //     $request->title,
        //     null,
        //     $request->body,
        //     now(),
        //     now()
        // ]);

        // query builder

        DB::table('posts')->insert([
            'title'     => $request->title,
            'cover'     => null,
            'body'      => $request->body,
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
