<?php

use App\Http\Controllers\Api\ChirpApiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ChirpController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/chirps',[ChirpApiController::class, "index"]);
Route::middleware('auth:sanctum')->post('/chirps',[ChirpApiController::class, "store"]);
// Route::middleware('auth:sanctum')->put('/chirps/{chirp}',[ChirpApiController::class, "update"]);
// Route::middleware('auth:sanctum')->delete('/chirps/{chirp}',[ChirpApiController::class, "delete"]);

// Route::get('/chirps', [ChirpApiController::class, "index"]);
Route::post('/login', [AuthenticatedSessionController::class, "generateToken"]);

