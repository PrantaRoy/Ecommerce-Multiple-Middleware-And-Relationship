<?php

namespace App\Http\Controllers\Supplier;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::latest()->get();
        return view('supplier.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $categories = Category::all();
        return view('supplier.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'description'=>'required',
            'purchase_date'=>'required',
            'category'=>'required',
        ]);

        $product =new Product();
        $product->user_id = Auth::id();
        $product->title =$request->title;
        $product->quantity =$request->quantity;
        $product->price =$request->price;
        $product->description =$request->description;
        $product->purchase_date =$request->purchase_date;
        $product->slug = str_slug($request->title);
        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('supplier.product.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'title'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'description'=>'required',
            'purchase_date'=>'required',
            'category'=>'required',
        ]);

        $product->user_id = Auth::id();
        $product->title =$request->title;
        $product->quantity =$request->quantity;
        $product->price =$request->price;
        $product->description =$request->description;
        $product->purchase_date =$request->purchase_date;
        $product->slug = str_slug($request->title);
        $product->save();
        return redirect()->route('supplier.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
