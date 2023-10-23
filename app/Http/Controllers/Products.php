<?php

namespace App\Http\Controllers;

use App\Models\ModelsModel;
use App\Models\ProductsModel;
use Illuminate\Http\Request;

class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductsModel::get();
        $models = ModelsModel::all();
        return view('add-product', ["products" => $products], ["models" => $models]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = ProductsModel::get();
        $models = ModelsModel::all();
        return view('add-product', ["products" => $products], ["models" => $models]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $find_model = ModelsModel::find($request -> selectedModelName);
        if($find_model){
            ProductsModel::create([
                "name" => $request -> name,
                "model_id" => $find_model -> id,
            ]);
        }
        else{
            return 'Basarisiz';
        }
        return redirect() -> route("add-product");
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
        ProductsModel::find($id) -> update([
            "name" => $request -> name,
            "model_id" => $request -> model_id,
        ]);
        return redirect() -> route("add-product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteProduct = ProductsModel::find($id);
        if($deleteProduct){
            $deleteProduct->delete();
        }
        return redirect() -> route("add-product");
    }
}
