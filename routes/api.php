<?php

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

<<<<<<< HEAD
<<<<<<< HEAD
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
////////// test
=======
Route::get('login', [App\Http\Controllers\LoginController::class,"login"]);
>>>>>>> f5387e8 (api created)
=======
Route::post('login', [App\Http\Controllers\LoginController::class,"login"]);
>>>>>>> 3dd7033 (a5r t3delat)
