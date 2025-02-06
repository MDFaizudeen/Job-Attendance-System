<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LeaveRequestController;  


// Routes for various types of relationships in AttendanceController
// Route::get('/attendance', [AttendanceController::class, 'index'])->name('one-to-one');//One-to-One relationship route
// Route::get('/attendance/create', [AttendanceController::class, 'onetoMany'])->name('one-to-many');//One-to-Many relationship route
// Route::get('/many', [AttendanceController::class, 'manyToMany'])->name('many-to-many');//Many-to-Many relationship route



Route::get('/attendance', [AttendanceController::class, 'index'])->name('one_to_one');// View attendance list

Route::get('/attendance/create', [AttendanceController::class, 'onetomany'])->name('one_to_many');//One-to-Many form for creating attendance
Route::get('/many', [AttendanceController::class, 'manytomany']);// Many-to-Many attendance creation route

Route::get('/has_one_through', [AttendanceController::class, 'hasonethrough']);// Has-One-Through relationship route
Route::get('/has_through_many', [AttendanceController::class, 'hasthroughmany']);// Has-Through-Many relationship route
Route::get('/polymorphic_one', [AttendanceController::class, 'polymorphicone']); //Polymorphic One-to-One route
Route::get('/polymorphic_many', [AttendanceController::class, 'polymorphicmany']); //Polymorphic One-to-Many route

 // Store attendance record
Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store');



// Default home route
// Route::get('/home', function () {
//     return view('home');
// });

// Grouping routes for admin users
// Route::middleware(['role:admin'])->group(function () {
//     Route::get('/hi', function () {
//         return view('home');
//     });
// });

// Login route, can accept any method (GET, POST, etc.)
Route::any('/login', function () {
    return view('login');
});


Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::any('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/go', [LeaveRequestController::class,'go'])->name('go');
Route::get('/move', [LeaveRequestController::class,'move'])->name('move');
Route::post('/movestore', [LeaveRequestController::class,'store'])->name('move.store');

Route::get('/home', function () {
    return view('auth.home');
})->name('home');
Route::get('/welcome', function () {
    return view('welcome');
});
