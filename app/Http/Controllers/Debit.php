<?php

namespace App\Http\Controllers;

use App\Models\DebitModel;
use App\Models\ProductsModel;
use App\Models\UsersModel;
use Illuminate\Http\Request;

class Debit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debits = DebitModel::get();
        $users = UsersModel::all();
        $products = ProductsModel::all();
        return view('add-debit', ["debits" => $debits , "users" => $users ,"products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $debits = DebitModel::get();
        $users = UsersModel::all();
        $products = ProductsModel::all();
        return view('add-debit', ["debits" => $debits , "users" => $users ,"products" => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $find_user = UsersModel::find($request -> selectedUser);
        $find_product = ProductsModel::find($request -> selectedProduct);
        if($find_product and $find_user){
            DebitModel::create([
                "user_id" => $find_user -> id,
                "product_id" => $find_product -> id,
                "quantity" => $request -> quantity,
            ]);
        }
        else{
            return 'Basarisiz';
        }
        return redirect() -> route("add-debit");
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
        DebitModel::find($id) -> update([
            "user_id" => $request -> user_id,
            "product_id" => $request -> product_id,
            "quantity" => $request -> quantity,
        ]);
        return redirect() -> route("add-debit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteDebit = DebitModel::find($id);
        if($deleteDebit){
            $deleteDebit->delete();
        }
        return redirect() -> route("add-debit");
    }
}
