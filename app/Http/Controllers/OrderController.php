<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//        //validation Order
//        $this->validate($request, [
//            'order'=>'required'
//        ]);

        //create order
        $order = new Order();
        $order->order_no = "200829";
        $order->user_id = Auth::user()->id;
        $order->total_price = $request->input('name');
        if($order->save())
            return redirect()->back()->with('success', 'Order Status Created Successfully');
        else
            return redirect()->back()->with('error', 'Oops!... Order Status Can not Created. Please try again.');
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}
