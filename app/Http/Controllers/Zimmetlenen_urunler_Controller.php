<?php

namespace App\Http\Controllers;

use App\Models\Zimmetlenen_urunler_Model;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;
use PhpParser\Node\Expr\FuncCall;
use App\Models\KisilerModel;
use Kisiler;
use ZimmetlenenUrunler;

class Zimmetlenen_urunler_Controller extends Controller
{
    public function showPageUrunZimmetle(){
        // $urunbul = Zimmetlenen_urunler_Model::find(6);
        // print_r($urunbul);
        return view("urun-zimmetle");
    }
    public function showPageZimmetlenenUrunler(){
        return view("zimmetlenen-urunler");
    }
    public function showPageZimmetDuzenle($id){
        $duzenlencekZimmet = Zimmetlenen_urunler_Model::find($id);
        return view("zimmet-duzenle", $duzenlencekZimmet);
    }

    public function urunZimmetle(Request $request){
        $urun_adi = $request -> urun_adi;
        $urun_modeli = $request -> urun_modeli;
        $urun_tipi = $request -> urun_tipi;
        $urun_sayisi = $request -> urun_sayisi;
        $zimmetlenen_kisi_adi = $request -> zimmetlenen_kisi;

        $isimBul = KisilerModel::where("ad", $zimmetlenen_kisi_adi) -> first();


        $isimYazdir = Zimmetlenen_urunler_Model::where("zimmetlenen_kisi_id", $isimBul -> kisi_id) -> first();
        $kisiBul = Zimmetlenen_urunler_Model::find($isimYazdir);
        // dd($kisiBul -> kisiler);
        // $isimBul = KisilerModel::find("Oguz") -> first();
        if($isimBul !== null){
            Zimmetlenen_urunler_Model::create([
            "urun_adi" => $urun_adi,
            "urun_modeli" => $urun_modeli,
            "urun_tipi" => $urun_tipi,
            "urun_sayisi" => $urun_sayisi,
            "zimmetlenen_kisi_id" => $isimBul -> kisi_id,
            ]);
        }
        return redirect("zimmetlenen-urunler");
    }

    public function zimmetlenenUrunleriListele(){
        $zimmetlenenUrunler = Zimmetlenen_urunler_Model::get();
        return view("zimmetlenen-urunler", ["zimmetlenenUrunler" => $zimmetlenenUrunler]);
    }

    public function update(Request $request, $id){
        Zimmetlenen_urunler_Model::find($id) -> update([
            "urun_adi" => $request -> urun_adi,
            "urun_modeli" => $request -> urun_modeli,
            "urun_tipi" => $request -> urun_tipi,
            "urun_sayisi" => $request -> urun_sayisi,
            "zimmetlenen_kisi_id" => $request -> zimmetlenen_kisi,
        ]);
    return redirect()->route("zimmet-duzenle", $id);
    }

    public function delete($id){
        $silinecekZimmet = Zimmetlenen_urunler_Model::find($id);
    if ($silinecekZimmet) {
        $silinecekZimmet->delete();
    }
    // return redirect()->route("zimmetlenen-urunler", $id);
    return redirect("zimmetlenen-urunler");
    }
}