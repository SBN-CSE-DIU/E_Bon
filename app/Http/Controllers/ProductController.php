<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $rows = Product::all();
        return view('admin/product/index', compact(['rows']));
    }

    public function create()
    {
        return view('admin/product/create');
    }

    public function store(Request $request)
    {
//        //validation lead
//        $this->validate($request, [
//            'company'=>'required',
//            'category_id'=>'required'
//        ]);

        //create leads
        $product = new Product();
//        $product->user_id = Auth::user()->id;
        $product->name = $request->input('name');
//        $product->category_id = $request->input('category_id');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $product->name.'.'.$ext;
            $file->move('product_image', $filename);
            $product->image = $filename;
        }else{
            $product->image = '';
        }

//        $product->description = $request->input('description');

        $product->save();
        return redirect('/admin/product');

//        if($product->save())
//            return redirect('/admin/product')->with('success', 'Product Created Successfully');
//        else
//            return redirect('/admin/product')->with('error', 'Oops!... Product Can not Created. Please try again.');
    }

    public function show()
    {
        return view('admin/product/show');
    }


    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/product');
    }
}
