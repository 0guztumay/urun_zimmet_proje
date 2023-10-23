<?php

namespace App\Http\Controllers;

use App\Models\BrandsModel;
use App\Models\ModelsModel;
use Illuminate\Http\Request;

class Models extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = ModelsModel::get();
        $brands = BrandsModel::all();
        return view('add-model', ["models" => $models], ["brands" => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = ModelsModel::get();
        $brands = BrandsModel::all();
        return view('add-model', ["models" => $models], ["brands" => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $find_brand = BrandsModel::find($request -> selectedBrandName);
        if($find_brand){
            ModelsModel::create([
                "name" => $request -> name,
                "brand_id" => $find_brand -> id,
            ]);
        }
        else{
            return 'Basarisiz';
        }
        return redirect() -> route("add-model");
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
        ModelsModel::find($id) -> update([
            "name" => $request -> name,
            "brand_id" => $request -> brand_id,
        ]);
        return redirect() -> route("add-model");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteModel = ModelsModel::find($id);
        if($deleteModel){
            $deleteModel->delete();
        }
        return redirect() -> route("add-model");
    }
}
