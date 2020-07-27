<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductStatus;
use Illuminate\Http\Request;

class ProductStatusController extends Controller
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

        //create Status
        $status = new ProductStatus();
        $status->name = $request->input('name');
        if($status->save())
            return redirect()->back()->with('success', 'Product Status Created Successfully');
        else
            return redirect()->back()->with('error', 'Oops!... Product Status Can not Created. Please try again.');
    }

    public function show(ProductStatus $productStatus)
    {
        //
    }

    public function edit(ProductStatus $productStatus)
    {
        //
    }

    public function update(Request $request, ProductStatus $productStatus)
    {
        //
    }

    public function destroy(ProductStatus $productStatus)
    {
        //
    }
}
