<?php

use App\Http\Controllers\APIAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StanController;
use App\Http\Controllers\PasController;

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



Route::get('stanovnici', [StanController::class, 'index']);
Route::get('stanovnici/{stanovnik}', [StanController::class, 'show']);
Route::get('psi', [PasController::class, 'index']);
Route::get('psi/{pas}', [PasController::class, 'show']);



Route::post('registeruser', [APIAuthController::class, 'registerUser']);
Route::post('loginuser', [APIAuthController::class, 'loginUser']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logoutuser', [APIAuthController::class, 'logoutUser']);
    Route::delete('stanovnici/{stanovnik}', [StanController::class, 'destroy']);
    Route::post('psi', [PasController::class, 'store']);
});





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
