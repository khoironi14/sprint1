<?php

use App\Http\Controllers\RajaongkirController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/search/provinces',[RajaongkirController::class,'getProvinces']);
Route::get('/search/cities',[RajaongkirController::class,'getCity']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

