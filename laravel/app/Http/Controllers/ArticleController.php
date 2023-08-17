<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;
use Storage;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('id','DESC')->get();
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        return view('article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $cover = $request->file('cover')->store('images','public');
        // $cover = $request->file('cover')->storeAs('images','qqq.png','public');
        
        if($request->file('cover')){
            // 取得副檔名
            $ext = $request->file('cover')->getClientOriginalExtension();
            
            // 定義檔名
            $cover = Str::uuid();
            
            // 組合檔名副檔名
            $result = "{$cover}.{$ext}";
            
            $request->file('cover')->storeAs('images',$result,'public');
        }else{
            $result = null;
        }
        
        // 驗證欄位
        $request->validate([
            // 'title' => 'required|max:10',
            // 'title' => ['required', 'max:10'],
            // 'body' => 'required'
        ]);

        //方法一
        // $article = new Article;
        // $article->title = $request->title;
        // $article->body = $request->body;
        // $article->save();

        // 方法二
        $article = new Article;
        $article->fill($request->all());
        $article->cover = $result;
        $article->user_id = Auth::id();
        $article->save();

        // 方法三
        // Article::create($request->all());
        
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        $this->authorize('view',$article);
        // if(Auth::user()->cannot('view',$article)){
            // abort(403);
            // abort(403,'您沒有權限喔');
        // }
        return view('article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //

        $categories = Category::get();
        return view('article.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        $this->authorize('update',$article);
        // if($request->user()->cannot('update',$article)){
        //     abort(403,'您沒有權限');
        // }

        $article->fill($request->all());
        $article->save();
        return redirect()->route('article.show',$article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        Storage::disk('public')->delete('/images/'.$article->cover);
        $article->delete();

        return redirect()->route('article.index');
    }
    public function index_with_category(Category $category){
        $articles = $category->articles;
        return view('article.index_with_category',compact('articles','category'));
    }
    public function admin_index(){
        $articles = Article::orderBy('id','DESC')->get();
        $articles_trashed = Article::onlyTrashed()->orderBy('id','DESC')->get();
        return view('admin.article.index',compact('articles','articles_trashed'));
    }
    public function admin_destroy(Article $article){
        Storage::disk('public')->delete('/images/'.$article->cover);
        $article->delete();

        return redirect()->route('admin.article.index');
    }
    public function admin_restore($id){
        $article = Article::onlyTrashed()->find($id);
        $article->restore();

        return redirect()->route('admin.article.index');

    }
    public function admin_forceDelete($id){
        $article = Article::onlyTrashed()->find($id);
        $article->forceDelete();

        return redirect()->route('admin.article.index');

    }
}
