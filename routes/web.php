<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// use App\Http\Controllers\AttendanceController;

// Route::resource('attendances', AttendanceController::class);

use App\Http\Controllers\JobAttendanceController;

// Route::get('/attendance', [JobAttendanceController::class, 'index']);
// Display all attendance records
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');

// Display the form to create attendance
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');

// Store a new attendance record
Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store');


