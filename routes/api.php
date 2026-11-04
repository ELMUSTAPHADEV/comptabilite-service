<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CompteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JournalController;


// Routes publiques
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Routes protégées
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', fn (Request $request) => $request->user());
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/comptes', [CompteController::class, 'index']);


    Route::apiResource('journaux', JournalController::class)
    ->parameters(['journaux' => 'journal'])
    ->except('show');


});
