<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZapatoController;

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

Route::get('/zapatos',[ZapatoController::class, 'index']);
Route::post('/zapatos',[ZapatoController::class, 'store']);
Route::put('/zapatos{id}',[ZapatoController::class, 'update']);
Route::delete('/zapatos{id}',[ZapatoController::class, 'destroy']);