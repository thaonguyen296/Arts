<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Manufacturer;
use App\Category;
use JD\Cloudder\Facades\Cloudder;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.list_product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturer = Manufacturer::all();
        $category = Category::all();
        return view('admin.product.add_product', compact('manufacturer','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // up ảnh lên servẻ cloudinary
        $image = $request->file('image');
        $image_name = $request->file('image')->getRealPath();
        Cloudder::upload($image_name, null);
        // list($width, $height) = getimagesize($image_name);
        $image_id = Cloudder::getPublicId();
        $image->move(public_path("uploads"));

        $table = new Product();
        $table->name = $request->product_name;
        $table->image = $image_id;
        $table->price = $request->price;
        $table->detail = $request->detail;
        $table->manufacturer_id = $request->manufacturer_id;
        $table->category_id = $request->category_id;
        $table->save();

        return redirect('/admin/list_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
