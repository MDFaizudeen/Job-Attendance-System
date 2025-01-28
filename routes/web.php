<?php

use Illuminate\Support\Facades\Route;



// use App\Http\Controllers\AttendanceController;

// Route::resource('attendances', AttendanceController::class);

use App\Http\Controllers\AttendanceController;

Route::get('/one-to-one', [AttendanceController::class, 'oneToOne'])->name('one-to-one');
Route::get('/one-to-many', [AttendanceController::class, 'oneToMany'])->name('one-to-many');
Route::get('/many-to-many', [AttendanceController::class, 'manyToMany'])->name('many-to-many');


// Route::get('/attendance', [JobAttendanceController::class, 'index']);
// Display all attendance records
Route::get('/attendance', [AttendanceController::class, 'index'])->name('one_to_one');

// Display the form to create attendance
Route::get('/attendance/create', [AttendanceController::class, 'onetomany'])->name('one_to_many');

// Store a new attendance record
Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store');



