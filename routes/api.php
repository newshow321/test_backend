<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\WilayahController;

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
