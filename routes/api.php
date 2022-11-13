<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//tugas pertemuan 4
Route::get('animals',[AnimalsController::class,'index']);
Route::post('animals-post',[AnimalsController::class,'store']);
Route::put('animals-update',[AnimalsController::class,'update']);
Route::delete('animals-delete',[AnimalsController::class,'delete']);