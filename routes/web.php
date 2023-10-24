<?php

use App\Http\Controllers\Brands;
use App\Http\Controllers\Models;
use App\Http\Controllers\Products;
use App\Http\Controllers\Users;
use App\Http\Controllers\Debit;
use App\Http\Controllers\DebitedProducts;
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

Route::get('/zimmet-duzenle/{id}', [Zimmetlenen_urunler_Controller::class, "showPageZimmetDuzenle"])->name("zimmet-duzenle");
Route::post('/zimmet-guncelle/{id}', [Zimmetlenen_urunler_Controller::class, "update"]) -> name("guncelle");

Route::get('/zimmet-sil/{id}', [Zimmetlenen_urunler_Controller::class, "delete"]) -> name("sil");

Route::get('/users', [Users::class, "showUsers"]) -> name("users");

Route::get('/debited-products/{id}', [DebitedProducts::class, "index"]) -> name("products");
// Route::get('/debited-products', [DebitedProducts::class, "index1"]) -> name("products");

//Brands
Route::get('/add-brand', [Brands::class, "index"]);
Route::post('/add-brand', [Brands::class, "store"]) -> name("add-brand");
Route::get('/add-brand', [Brands::class, "create"]) -> name("list-brands");
Route::get('/delete-brand/{id}', [Brands::class, "destroy"]) -> name("delete-brand");
Route::post('/update-brand/{id}', [Brands::class, "update"]) -> name("update-brand");
//Brands

//Models
Route::get('/add-model', [Models::class, "index"]);
Route::post('/add-model', [Models::class, "store"]) -> name("add-model");
Route::get('/add-model', [Models::class, "create"]) -> name("list-models");
Route::get('/delete-model/{id}', [Models::class, "destroy"]) -> name("delete-model");
Route::post('/update-model/{id}', [Models::class, "update"]) -> name("update-model");
//Models

//Products
Route::get('/add-product', [Products::class, "index"]);
Route::post('/add-product', [Products::class, "store"]) -> name("add-product");
Route::get('/add-product', [Products::class, "create"]) -> name("list-Products");
Route::get('/delete-product/{id}', [Products::class, "destroy"]) -> name("delete-product");
Route::post('/update-product/{id}', [Products::class, "update"]) -> name("update-product");
//Products

//Users
Route::get('/add-user', [Users::class, "index"]);
Route::post('/add-user', [Users::class, "store"]) -> name("add-user");
Route::get('/add-user', [Users::class, "create"]) -> name("list-users");
Route::get('/delete-user/{id}', [Users::class, "destroy"]) -> name("delete-user");
Route::post('/update-user/{id}', [Users::class, "update"]) -> name("update-user");
//Users

//Debit
Route::get('/add-debit', [Debit::class, "index"]);
Route::post('/add-debit', [Debit::class, "store"]) -> name("add-debit");
Route::get('/add-debit', [Debit::class, "create"]) -> name("list-debits");
Route::get('/delete-debit/{id}', [Debit::class, "destroy"]) -> name("delete-debit");
Route::post('/update-debit/{id}', [Debit::class, "update"]) -> name("update-debit");
//Debit