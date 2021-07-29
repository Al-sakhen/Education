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

Route::get ('/dashboard/courses/addcourse1', [adminController::class, 'InsertCourse1']);
Route::post ('/dashboard/courses/postcourse1', [adminController::class, 'PostInsertCourse1']);
Route::get ('/dashboard/courses/addcourse2', [adminController::class, 'InsertCourse2']);
Route::post ('/dashboard/courses/postcourse2', [adminController::class, 'PostInsertCourse2']);
Route::get ('/dashboard/courses/addcourse3', [adminController::class, 'InsertCourse3']);
Route::post ('/dashboard/courses/postcourse3', [adminController::class, 'PostInsertCourse3']);
Route::get ('/dashboard/courses/addcourse4', [adminController::class, 'InsertCourse4']);
Route::post ('/dashboard/courses/postcourse4', [adminController::class, 'PostInsertCourse4']);


Route::get ('dashboard/delete1/{id}', [adminController::class, 'deleteCourse1']);
Route::get ('dashboard/delete2/{id}', [adminController::class, 'deleteCourse2']);
Route::get ('dashboard/delete3/{id}', [adminController::class, 'deleteCourse3']);
Route::get ('dashboard/delete4/{id}', [adminController::class, 'deleteCourse4']);

Route::get ('/dashboard/courses/updatecourse1/{id}', [adminController::class, 'showCourse1']);
Route::get ('/dashboard/courses/updatecourse2/{id}', [adminController::class, 'showCourse2']);
Route::get ('/dashboard/courses/updatecourse3/{id}', [adminController::class, 'showCourse3']);
Route::get ('/dashboard/courses/updatecourse4/{id}', [adminController::class, 'showCourse4']);

Route::post ('/dashboard/courses/updatecourse1', [adminController::class, 'updateCourse1']);
Route::post ('/dashboard/courses/updatecourse2', [adminController::class, 'updateCourse2']);
Route::post ('/dashboard/courses/updatecourse3', [adminController::class, 'updateCourse3']);
Route::post ('/dashboard/courses/updatecourse4', [adminController::class, 'updateCourse4']);








