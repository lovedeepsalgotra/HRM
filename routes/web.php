<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TestimonialContoller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontServicepageController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\FrontDoctorController;
use App\Http\Controllers\FrontBlogController;
use App\Http\Controllers\FrontPackageController;
use App\Http\Controllers\AppointmentController; 
use App\Http\Controllers\attendences; 

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

Route::post('/narabhit', [App\Http\Controllers\HomeController::class, 'narabhit'])->name('narabhit');


// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes(['register' => false]);

// Auth::routes();



Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');


Route::group(['middleware' => 'auth'], function () {


   
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


   Route::get('/emplist',[attendences::class,'emplist'])->name('emplist');
//   Route::get('/emp_detail/{id}/{month}',[attendences::class,'emp_detail'])->name('emp_detail');
   Route::get('/attendenceslist',[attendences::class,'attendencelist'])->name('attendenceslist');
   Route::get('/edit_attendance/{id}',[attendences::class,'edit_attendance'])->name('edit_attendance');
   Route::get('/edit_emp_de/{id}',[attendences::class,'edit_emp_de'])->name('edit_emp_de');
   Route::post('/edit_attendance',[attendences::class,'edit_attendance_post'])->name('edit_attendance_post');
   Route::post('/cal_salary',[attendences::class,'cal_salary'])->name('cal_salary');
    Route::get('/add_emp',[attendences::class,'add_emp'])->name('add_emp');
    Route::post('/add_emp',[attendences::class,'add_emp_post'])->name('add_emp_post');
    Route::get('/del_attendance/{id}',[attendences::class,'del_attendance'])->name('del_attendance');
 

});

//frontend
Route::get('/',function(){
   return redirect('admin');
    })->name('home');

   Route::get('/emp_detail/{id}/{month}/{year?}',[attendences::class,'emp_detail'])->name('emp_detail');
    Route::get('/del_emp_de/{id}',[attendences::class,'del_emp_de'])->name('del_emp_de');

     



Route::get('/comeoffice/{id}',[attendences::class,'comeoffice'])->name('comeoffice');
