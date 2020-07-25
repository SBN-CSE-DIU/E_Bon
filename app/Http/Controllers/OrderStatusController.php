<?php

namespace App\Http\Controllers;

use App\Category;
use App\OrderStatus;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
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
        //validation status
        $this->validate($request, [
            'name'=>'required'
        ]);

        //create status
        $status = new Category();
        $status->name = $request->input('name');
        if($status->save())
            return redirect()->back()->with('success', 'Order Status Created Successfully');
        else
            return redirect()->back()->with('error', 'Oops!... Order Status Can not Created. Please try again.');
    }

    public function show(OrderStatus $orderStatus)
    {
        //
    }

    public function edit(OrderStatus $orderStatus)
    {
        //
    }

    public function update(Request $request, OrderStatus $orderStatus)
    {
        //
    }

    public function destroy(OrderStatus $orderStatus)
    {
        //
    }
}
