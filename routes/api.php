<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API TEST

Route::controller(ApiController::class)->group(function () {
    Route::group(['middleware' => 'api_key'], function () {
        Route::get('/users', 'getUsers');
    });
});

//Route::controller(ApiController::class)->group(function () {
//    Route::get('/users', 'getUsers');
//    Route::post('/users', 'createUser');
//    Route::put('/users/{id}', 'updateUser');
//    Route::delete('/users/{id}', 'deleteUser');
//});
