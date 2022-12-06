<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\MenuItem;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = MenuItem::all();
        $orders = Order::all();

        // Latest order details
        $lastID = OrderDetail::max('order_id');
        $order_receipt = OrderDetail::where('order_id', $lastID)->get();
        
        return view('orders.index', compact('products', 'orders', 'order_receipt'));
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
        DB::transaction(function () use ($request){

            //Order Modal
            $orders = new Order;
            $orders->name = $request->customer_name;
            $orders->phone = $request->customer_phone;
            $orders->status = $request->status;
            $orders->save();

            $order_id = $orders->id;

            //Order Details Modal
            for($product_id = 0; $product_id < count($request->product_id); $product_id++){
                $order_details = new OrderDetail;
                $order_details->order_id = $order_id;
                $order_details->product_id = $request->product_id[$product_id];
                $order_details->unitprice = $request->price[$product_id];
                $order_details->quantity = $request->quantity[$product_id];
                $order_details->amount = $request->total_amount[$product_id];
                $order_details->save();
            }
            
            //Transaction Model
            $transaction = new Transaction();
            $transaction->order_id = $order_id;
            $transaction->user_id = auth()->user()->id;
            $transaction->balance = $request->balance;
            $transaction->paid_amount = $request->paid_amount;
            $transaction->payment_method = $request->payment_method;
            $transaction->transac_amount = $order_details->amount;
            $transaction->transac_date = date('Y-m-d');
            $transaction->save();

            Cart::where('user_id', auth()->user()->id)->delete();
            
            //Last Order History
            $products = MenuItem::all();
            $order_details = OrderDetail::where('order_id', $order_id)->get();
            $orderBy = Order::where('id', $order_id)->get();

            return view('orders.index', compact('products', 'order_details', 'orderBy'));


        });

        return back()->with('Product orders fail to insert, check your inputs!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $orderDetails = DB::table('order_details')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->join('menu_items', 'order_details.product_id', '=', 'menu_items.id')
            ->select('order_details.product_id', 'order_details.quantity', 'order_details.unitprice', 'order_details.amount', 'menu_items.foodname')
            ->where('order_details.order_id', $order->id)           
            ->get();

            return view('orders.show',compact('order', 'orderDetails'));
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

    public function showOrders(){
        $orders = Order::all();
        return view('orders.showOrders',compact('orders'));
    }

    public function cancel(Request $order)
    {
        Order::find($order->id)->update(array('status' => 'Cancelled'));

        return redirect()->route('showOrders')->with('success', "Order Cancelled");
    }

    public function done(Request $order)
    {
        Order::find($order->id)->update(array('status' => 'Done'));

        return redirect()->route('showOrders')->with('success', "Order successfull!");
    }
}
