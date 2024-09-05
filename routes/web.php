<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserDetailController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Register
Route::get('register', [AuthController::class,'register'])->name('auth.register');
Route::post('register', [AuthController::class,'registerSubmit'])->name('auth.register.submit');

//Login
Route::get('login', [AuthController::class,'login'])->name('auth.login');
Route::post('login', [AuthController::class,'loginSubmit'])->name('auth.login.submit');

Route::get('home', [HomeController::class,'index'])->name('home');

// Route::prefix('user-detail')->middleware('auth')->group(function () {
//     Route::get('create', [UserDetailController::class,'create'])->name('user_details.create');
//     Route::post('store', [UserDetailController::class,'store'])->name('user_details.store');
// });

// Route::prefix('education')->group(function () {
//     Route::get('create', [EducationController::class,'create'])->name('education.create');
// });

//User Details
Route::resource('user-detail', UserDetailController::class)->middleware('auth');

//Education
Route::resource('education', EducationController::class)->middleware('auth');

//Experience
Route::resource('experience',ExperienceController::class)->middleware('auth');

//Skill
Route::resource('skill',SkillController::class)->middleware('auth');