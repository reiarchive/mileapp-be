<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

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

Route::get('/package', [PackageController::class,'index']);
Route::get('/package/{id}', [PackageController::class, 'find']);

Route::post('/package', [PackageController::class, 'insert']);

Route::put('/package/{id}', [PackageController::class, 'put']);
Route::patch('/package/{id}', [PackageController::class, 'patch']);

Route::delete('/package/{id}', [PackageController::class, 'delete']);
