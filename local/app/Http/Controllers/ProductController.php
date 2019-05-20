<?php

namespace App\Http\Controllers;
use DB;
use App\Products;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
        $serial = 1;
        $data = DB::table('products')
                ->orderBy('id', 'desc')
                ->get();
        return view('Product', ['data'=>$data], ['serial'=>$serial]);
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
            'image' => 'required',
            'size' => 'required|max:6',
            'color' => 'required',
            'short_desc' => 'required',
            'detail' => 'required',

        ]);
        $Product = new Products;
        $Product->name = $request->name;
        $Product->cate_id = $request->cate_id;
        $Product->price = $request->price;
        $Product->size = $request->size;
        $Product->color = $request->color;
        $Product->short_desc = $request->short_desc;
        $Product->detail = $request->detail;
        if($request->hasFile('image')){
            $file = Input::file('image');
            $destination = 'uploads/';
            $ext = $file->getClientOriginalExtension();
            $mainFilename = str_random(6).date('h-i-s');
            $file->move($destination, $mainFilename.".".$ext);
        };
        $Product->image = $mainFilename.'.'.$ext;
        $Product->save();
        return redirect('san-pham');
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
        $productID = $products->get('id');
        $getProductID = Products::find($productID);
        echo '<pre>';
        var_dump($getProductID);die;
        DB::table('products')->delete();
        return redirect('san-pham')->with('success', 'Product deleted successfully');
    }
}
