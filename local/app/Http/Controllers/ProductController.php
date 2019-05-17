<?php

namespace App\Http\Controllers;
use DB;
use App\Products;
use App\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('products')->get();
        return view('Product',['data']->$data);
    }
    public function AddPage()
    {
        $data = DB::table('Categories')->get();
        return view('AddProduct',['data'=>$data]);
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
        $requestValidate = $request->validate([
            'name' => 'required|max:64',
            'image' => 'required'
        ]);
        $Product = new Products;
        $Product->name = $request->name;
        $Product->image = $request->image;
        $Product->cate_id = $request->cate_id;
        $Product->price = $request->price;
        $Product->size = $request->size;
        $Product->color = $request->color;
        $Product->short_desc = $request->short_desc;
        $Product->detail = $request->detail;
        $Product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
