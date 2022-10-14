<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;

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

Route::get('/shoes',[ShoeController::class, 'index']);
Route::post('/shoes',[ShoeController::class, 'store']);
Route::put('/shoes{id}',[ShoeController::class, 'update']);
Route::delete('/shoes{id}',[ShoeController::class, 'destroy']);