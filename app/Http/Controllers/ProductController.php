<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
    public function create()
    {
        return view('create_products');
    }
    public function store(Request $request)
    {
        $title = $request->title;
        $link = $request->link;
        $quantity = $request->quantity;
        $mrp = $request->mrp;

        $obj = new Product();

        $obj->title = $title;
        $obj->link = $link;
        $obj->quantity = $quantity;
        $obj->mrp = $mrp;

        if ($obj->save()) {
            // echo 'Data saved successfully';
            return redirect()->to('products');
        }
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit_pro', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->link = $request->link;
        $product->quantity = $request->quantity;
        $product->mrp = $request->mrp;

        if ($product->save()) {
            return redirect('products');
        }
    }
    public function delete($id)
    {
        $pro = Product::find($id);

        if ($pro->delete()) {
            return redirect('products');
        }
    }
}
