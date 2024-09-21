<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\image;
use Illuminate\Support\Facades\Storage;
use Auth;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.add-product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name'=> 'required|string|min:3|max:23',
            // 'product_name'=> 'requried|string|min:3|max:23',
            // 'product_name'=> 'requried|string|min:3|max:23',
            // 'product_name'=> 'requried|string|min:3|max:23',
            // 'product_name'=> 'requried|string|min:3|max:23',
        ]);
       $imgurl = Storage::disk('local')->put('example.txt', 'Contents');
      $product = Product::create([
        'product_name'=>$request->product_name,
        'mrp_price'=>$request->mrp_price,
        'selling_price'=>$request->selling_price,
        'short_desc'=>$request->short_description,
        'long_desc'=>$request->long_description,
     
        // 'vendor_id' => optional(Auth::user())->id,
        'vendor_id'=> Auth::user()->id,
        'tage'=>$request->tage,
        'category'=>$request->category

       ]);
       return $product;

       $Image::create([
        'image_path'=>$imgurl,
        'product_id'=>$product->id
       ]);
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
