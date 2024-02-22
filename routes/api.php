<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisKelaminController;
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

Route::get('jenis-kelamin', [JenisKelaminController::class, 'index']);
Route::post('jenis-kelamin/add', [JenisKelaminController::class, 'store']);
Route::put('jenis-kelamin/update/{id}', [JenisKelaminController::class, 'update']);
Route::delete('jenis-kelamin/{id}', [JenisKelaminController::class, 'destroy']);