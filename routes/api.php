<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\WilayahController;
use App\Http\Controllers\API\KategoriController;
use App\Http\Controllers\API\ProdukController;
use App\Http\Controllers\API\RestoranController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('wilayahs', [WilayahController::class, 'get']);
Route::get('wilayah/{id}', [WilayahController::class, 'get']);
Route::post('wilayah', [WilayahController::class, 'store']);
Route::put('wilayah/{id}', [WilayahController::class, 'update']);
Route::delete('wilayah/{id}', [WilayahController::class, 'destroy']);

Route::get('kategoris', [KategoriController::class, 'get']);
Route::get('kategori/{id}', [KategoriController::class, 'get']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::put('kategori/{id}', [KategoriController::class, 'update']);
Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

Route::get('produks', [ProdukController::class, 'get']);
Route::get('produk/{id}', [ProdukController::class, 'get']);
Route::post('produk', [ProdukController::class, 'store']);
Route::put('produk/{id}', [ProdukController::class, 'update']);
Route::delete('produk/{id}', [ProdukController::class, 'destroy']);

Route::get('restorans', [RestoranController::class, 'get']);
Route::get('restoran/{id}', [RestoranController::class, 'get']);
Route::post('restoran', [RestoranController::class, 'store']);
Route::put('restoran/{id}', [RestoranController::class, 'update']);
Route::delete('restoran/{id}', [RestoranController::class, 'destroy']);

