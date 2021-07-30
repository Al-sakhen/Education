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


//  -----------------courses controller ----------------------
Route::get ('/dashboard', [adminController::class, 'index']);
Route::get ('/dashboard/FirstYear', [coursesController::class, 'courses1']);
Route::get ('/dashboard/SecondYear', [coursesController::class, 'courses2']);
Route::get ('/dashboard/ThirdYear', [coursesController::class, 'courses3']);
Route::get ('/dashboard/FourthYear', [coursesController::class, 'courses4']);

Route::get ('/dashboard/courses/addcourse1', [coursesController::class, 'InsertCourse1']);
Route::post ('/dashboard/courses/postcourse1', [coursesController::class, 'PostInsertCourse1']);
Route::get ('/dashboard/courses/addcourse2', [coursesController::class, 'InsertCourse2']);
Route::post ('/dashboard/courses/postcourse2', [coursesController::class, 'PostInsertCourse2']);
Route::get ('/dashboard/courses/addcourse3', [coursesController::class, 'InsertCourse3']);
Route::post ('/dashboard/courses/postcourse3', [coursesController::class, 'PostInsertCourse3']);
Route::get ('/dashboard/courses/addcourse4', [coursesController::class, 'InsertCourse4']);
Route::post ('/dashboard/courses/postcourse4', [coursesController::class, 'PostInsertCourse4']);


Route::get ('dashboard/delete1/{id}', [coursesController::class, 'deleteCourse1']);
Route::get ('dashboard/delete2/{id}', [coursesController::class, 'deleteCourse2']);
Route::get ('dashboard/delete3/{id}', [coursesController::class, 'deleteCourse3']);
Route::get ('dashboard/delete4/{id}', [coursesController::class, 'deleteCourse4']);

Route::get ('/dashboard/courses/updatecourse1/{id}', [coursesController::class, 'showCourse1']);
Route::get ('/dashboard/courses/updatecourse2/{id}', [coursesController::class, 'showCourse2']);
Route::get ('/dashboard/courses/updatecourse3/{id}', [coursesController::class, 'showCourse3']);
Route::get ('/dashboard/courses/updatecourse4/{id}', [coursesController::class, 'showCourse4']);

Route::post ('/dashboard/courses/updatecourse1', [coursesController::class, 'updateCourse1']);
Route::post ('/dashboard/courses/updatecourse2', [coursesController::class, 'updateCourse2']);
Route::post ('/dashboard/courses/updatecourse3', [coursesController::class, 'updateCourse3']);
Route::post ('/dashboard/courses/updatecourse4', [coursesController::class, 'updateCourse4']);


//  -----------------admin controller ----------------------
Route::get ('/register', [adminController::class, 'register']);
Route::post ('/postregister', [adminController::class, 'postregister']);

Route::get ('/login', [adminController::class, 'login'])->name('login');
Route::post ('/postlogin', [adminController::class, 'postlogin']);
Route::get ('/logout', [adminController::class, 'logout']);












