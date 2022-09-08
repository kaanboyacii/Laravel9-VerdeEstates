<?php

use App\Http\Controllers\Api\ServiceController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/service','index');
    Route::post('/service','store');
    Route::get('/service/{id}','show');
    Route::put('/service/{id}','update');
    Route::delete('/service/{id}','destroy');
});
