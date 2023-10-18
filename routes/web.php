<?php

use App\Http\Controllers\Zimmetlenen_urunler_Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/urun-zimmetle', [Zimmetlenen_urunler_Controller::class, "showPageUrunZimmetle"]);
Route::post('/urun-zimmetlendi', [Zimmetlenen_urunler_Controller::class, "urunZimmetle"]) -> name('zimmetle');

Route::get('/zimmetlenen-urunler',[Zimmetlenen_urunler_Controller::class, "zimmetlenenUrunleriListele"]);

Route::get('/zimmet-duzenle/{urun_id}', [Zimmetlenen_urunler_Controller::class, "showPageZimmetDuzenle"])->name("zimmet-duzenle");
Route::post('/zimmet-guncelle/{urun_id}', [Zimmetlenen_urunler_Controller::class, "update"]) -> name("guncelle");

Route::get('/zimmet-sil/{urun_id}', [Zimmetlenen_urunler_Controller::class, "delete"]) -> name("sil");
