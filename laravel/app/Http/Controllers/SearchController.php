<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
class SearchController extends Controller
{
    //
    public function index(Request $request){
        $search = DB::select("SELECT * FROM products where title like '%$request->input%'");
        return view('search',compact('search'));
    }
}
