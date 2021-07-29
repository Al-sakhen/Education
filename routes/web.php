<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\yearsController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\adminController;


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
// home controller
Route::get('/', [homeController::class, 'index']);
Route::get ('/index', [homeController::class, 'index']);
Route::get ('/inner', [homeController::class, 'inner_page']);
Route::get ('/subject/{id}', [homeController::class, 'subject_details']);
Route::get ('/FstYear', [homeController::class, 'FstYear']);
Route::get ('/ScndYear', [homeController::class, 'ScndYear']);
Route::get ('/ThrdYear', [homeController::class, 'ThrdYear']);
Route::get ('/FrthYear', [homeController::class, 'FrthYear']);



// year controller
Route::get ('/year', [yearsController::class, 'InsertName']);
Route::post ('/PostInsertName', [yearsController::class, 'PostInsertName']);

// course controller
// Route::get ('/dashboard/addCourse', [coursesController::class, 'InsertCourse']);
// Route::post ('/postcourse', [coursesController::class, 'PostInsertCourse']);

// Route::get ('/subject', [coursesController::class, 'subject']);

// Admin Controller --> for courses
Route::get ('/dashboard', [adminController::class, 'index']);
Route::get ('/dashboard/FirstYear', [adminController::class, 'courses1']);
Route::get ('/dashboard/SecondYear', [adminController::class, 'courses2']);
Route::get ('/dashboard/ThirdYear', [adminController::class, 'courses3']);
Route::get ('/dashboard/FourthYear', [adminController::class, 'courses4']);

Route::get ('/dashboard/courses/addcourse', [adminController::class, 'InsertCourse']);
Route::post ('/dashboard/courses/postcourse', [adminController::class, 'PostInsertCourse']);
Route::get ('dashboard/delete/{id}', [adminController::class, 'deleteCourse']);
Route::get ('/dashboard/courses/updatecourse/{id}', [adminController::class, 'showCourse']);
Route::post ('/dashboard/courses/updatecourse', [adminController::class, 'updateCourse']);








