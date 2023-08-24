<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',function(){
    return view('home');
});

Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::get('/post/create',[PostController::class,'create'])->name('post.create');
Route::post('/post',[PostController::class,'store']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::get('/post/{id}/edit',[PostController::class,'edit']);
Route::put('/post/{id}',[PostController::class,'update']);
// Route::patch('/post',[PostController::class,'update']);
Route::delete('/post/{id}',[PostController::class,'destroy']);

// Route::resource('/post',PostController::class);
// Route::resource('/article',ArticleController::class)->middleware('auth');
Route::group(['middleware'=>'auth'],function(){
    Route::resource('/article',ArticleController::class)->except('index','show');
});
Route::resource('/article',ArticleController::class)->only('index','show');

Route::get('category/{category}/article',[ArticleController::class,'index_with_category'])
->name('category.article');

Route::resource('/category',CategoryController::class);
// Route::resource('/category',CategoryController::class)->middleware('auth');
// Route::resource('/category',CategoryController::class)->middleware('can:admin');
// Route::group(['middleware'=>'can:admin'],function(){
//     Route::resource('/category',CategoryController::class)->except('index');
// });
// Route::resource('/category',CategoryController::class)->only('index');

// Route::middleware('can:admin')->group(function(){
//     ....
// });

// 管理頁面
Route::get('/admin/article',[ArticleController::class, 'admin_index'])->middleware(['auth', 'verified'])->name('admin.article.index');
Route::delete('/admin/article/{article}',[ArticleController::class, 'admin_destroy'])
->middleware(['auth', 'verified'])->name('admin.article.delete');

Route::get('/admin/article/restore/{article}',[ArticleController::class, 'admin_restore'])
->middleware(['auth', 'verified'])->name('admin.article.restore');

Route::delete('/admin/article/forceDelete/{article}',[ArticleController::class, 'admin_forceDelete'])
->middleware(['auth', 'verified'])->name('admin.article.forceDelete');

// 商品管理
Route::resource('/admin/product',ProductController::class)
->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 商品前台
Route::get('/product',[ProductController::class,'front_index'])->name('front.product.index');


//加入購物車
Route::post('/cart',[CartController::class,'addToCart'])->name('add.cart');

//購物車頁面
Route::get('/cart',[CartController::class,'index']);

//移除購物車項目
Route::delete('/cart/{cart}',[CartController::class,'delete'])
->name('cart.delete');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
