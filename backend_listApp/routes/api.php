<?php

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\ReminderController;
use App\Http\Controllers\api\TaskController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Pendaftaran user 
Route::get('/user', [UserController::class, 'readAll']);
Route::get('/category', [CategoryController::class, 'readAll']);
Route::get('/reminder', [ReminderController::class, 'readAll']);
Route::get('/task', [TaskController::class, 'readAll']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    // Task
    Route::get('/task/user/{id}', [TaskController::class, 'whereUserId']);
    Route::get('/task/limit', [TaskController::class, 'readTaskLimit']);
    // Fitur pencarian task 
    Route::get('/task/search/nama/{nama_tugas}', [TaskController::class, 'searchByTask']);
});


