<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IklanController;
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
Route::get('/cek_sanctum', [UserController::class, 'cek_sanctum'])->middleware('auth:sanctum');


Route::post('/login', [UserController::class, 'user']);
Route::post('/regis_user', [UserController::class, 'regis_user']);
Route::get('/iklan', [IklanController::class, 'get_iklan']);
Route::get('/new_iklan', [IklanController::class, 'get_new_iklan']);
Route::get('/history/{id}', [AdminController::class, 'get_history']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return 'oke';
// });