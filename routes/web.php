<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;

// Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/createcategory', [CategoryController::class, 'create']);
Route::post('/insertcategory', [CategoryController::class, 'store']);

Route::get('/editcategory/{id}', [CategoryController::class, 'edit']);
Route::post('/updatecategory/{id}', [CategoryController::class, 'update']);
Route::get('/deletecategory/{id}', [CategoryController::class, 'destroy']);

//Resep
Route::get('/resep', [ResepController::class, 'index'])->name('resep');
Route::get('/createresep', [ResepController::class, 'create']);
Route::post('/insertresep', [ResepController::class, 'store']);

Route::get('/editresep/{id}', [ResepController::class, 'edit']);
Route::post('/updateresep/{id}', [ResepController::class, 'update']);
Route::get('/deleteresep/{id}', [ResepController::class, 'destroy']);
<<<<<<< HEAD
Route::get('/detailresep/{id}', [ResepController::class, 'show']);
=======
Route::get('/detail/{id}', [ResepController::class, 'show'])->name('detail');
Route::post('/update/resep/{id}', [ResepController::class, 'update'])->name('resep.update');
Route::get('/resep', [ResepController::class, 'index'])->name('resep.index');


>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56

// Video
Route::get('/video', [VideoController::class, 'index'])->name('video');
Route::get('/createvideo', [VideoController::class, 'create']);
Route::post('/insertvideo', [VideoController::class, 'store']);

Route::get('/editvideo/{id}', [VideoController::class, 'edit']);
Route::post('/updatevideo/{id}', [VideoController::class, 'update']);
Route::get('/deletevideo/{id}', [VideoController::class, 'destroy']);

// User
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/edituser/{id}', [UserController::class, 'edit']);
Route::post('/updateuser/{id}', [UserController::class, 'update']);

Route::get('/setting/{id}', [UserController::class, 'setting']);
Route::post('/updatesetting/{id}', [UserController::class, 'updatesetting']);

// Renew password
Route::get('change-password', [ChangePasswordController::class, 'index']);
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/video', function () {
//     return view('video.index');
// });


// Route::get('/editvideo', function () {
//     return view('video.edit');
// });


// Route::get('/createvideo', function () {
//     return view('video.create');
// });