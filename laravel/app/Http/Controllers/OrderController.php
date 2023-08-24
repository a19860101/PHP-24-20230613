<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;
use Illuminate\Http\Request;

use DB;
use Auth;

class OrderController extends Controller
{
    public function checkout(){
        $orderNo = time();
        $order = Order::create([
            'orderNo' => $orderNo,
            'user_id' => Auth::id()
        ]);
        $carts = Cart::where('user_id',Auth::id())->get();
        foreach($carts as $cart){
            DB::table('order_details')->insert([
                'product_id' => $cart->product->id,
                'order_id' => $order->id
            ]);

            $cart->delete();
        }
        return redirect()->route('result');


    }
    public function front_index(){
        $orders = Order::where('user_id',Auth::id())->orderBy('id','DESC')->get();
        return view('order.index',compact('orders'));
    }
    public function front_show(Order $order){
        $orderDetails = OrderDetail::where('order_id',$order->id)->get();
        return view('order.show',compact('order','orderDetails'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
