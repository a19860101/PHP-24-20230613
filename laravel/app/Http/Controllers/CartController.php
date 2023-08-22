<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Cart;

class CartController extends Controller
{
    //
    public function addToCart(Request $request){
        if(!Auth::id()){
            return redirect()->route('login');
        }
        Cart::create([
            'product_id' => $request->id,
            'user_id' => Auth::id()
        ]);
        return redirect()->back();
    }
    public function index(){
        $carts = Cart::where('user_id',Auth::id())->get();

        $price = [];
        foreach($carts as $cart){
            $price[] = $cart->product->price;
        }
        $total = collect($price)->sum();

        return view('cart.index',compact('carts','total'));
    }
}
