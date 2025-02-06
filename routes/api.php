<?php

use App\Http\Controllers\AuthController;
use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->post ('/user', [AuthController::class, 'users']);
Route::middleware('auth:sanctum')->post ('/updateuser/{id}', [AuthController::class, 'update']);
Route::middleware('auth:sanctum')->post ('/delete/{id}', [AuthController::class, 'destroy']);
