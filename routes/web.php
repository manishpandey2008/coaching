<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\RegistrationController as RController;
use App\Http\Controllers\admin\AdminController as AController;

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

Route::get('/kashyapMathematics', function () {
   		 return view('index');
	})->name('home');
Route::GET('/kashyapMathematics/login', function () {
    	return view('login');
	})->name('getLogin');

Route::POST('/kashyapMathematics/login',[RController::class,'Login'])->name('login');

Route::group(['prefix'=>'/kashyapMathematics/admin'],function(){
	Route::GET('{userName}/home',[AController::class,'Home'])->name('admin-home');

	Route::GET('{userName}/student/new',[AController::class,'NewStudent'])->name('admin-newStudent');
	Route::POST('{userName}/student/new',[AController::class,'AddNewStudent'])->name('admin-addNewStudent');

	Route::GET('{userName}/student/details/{studentId}',[AController::class,'StudentDetails'])->name('admin-studentDetails');
	Route::GET('{userName}/student/all',[AController::class,'StudentAll'])->name('admin-studentAll');


	Route::GET('{userName}/class/new',[AController::class,'NewClassForm'])->name('admin-newClass');
	Route::POST('{userName}/class/new',[AController::class,'AddNewClass'])->name('admin-newClassAdd');
	Route::GET('{userName}/class/list',[AController::class,'ClassList'])->name('admin-allClassList');
});