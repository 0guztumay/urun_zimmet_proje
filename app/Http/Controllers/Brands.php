<?php

namespace App\Http\Controllers;

use App\Models\BrandsModel;
use Illuminate\Http\Request;

class Brands extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $models = BrandsModel::find(2);
        // dd($models);
        $brands = BrandsModel::get();
        return view('add-brand', ["brands" => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = BrandsModel::get();
        return view('add-brand', ["brands" => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BrandsModel::create([
            "name" => $request -> name,
        ]);
        return redirect() -> route("add-brand");
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
        BrandsModel::find($id) -> update([
            "name" => $request -> name,
        ]);
        return redirect() -> route("add-brand");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteBrand = BrandsModel::find($id);
        if($deleteBrand){
            $deleteBrand->delete();
        }
        return redirect() -> route("add-brand");
    }
}
