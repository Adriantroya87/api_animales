<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Animal;
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
Route::get("/animales", "App\Http\Controllers\AnimalController@index");
Route::post("/animales", "App\Http\Controllers\AnimalController@store");
//Route::post("/animales", AnimalController::class, 'store');

Route::get("/animales/{id}", "App\Http\Controllers\AnimalController@show");
Route::put("/animales/{id}", "App\Http\Controllers\AnimalController@update");
Route::delete("/animales/{id}", "App\Http\Controllers\AnimalController@destroy");