<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [FrontController::class, 'goLogin'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');


Route::get('/test', [FrontController::class, 'reports1'])->name('test');

//Route::group(['middleware' => ['auth']], function () {
   Route::get('/main', [FrontController::class, 'studentRegistration'])->name('index');
   Route::post('/studentdetails', [FrontController::class, 'studentdetailspost'])->name('studentdetials.post');
   Route::get('/reports', [FrontController::class, 'reports']);
   Route::post('/registration',[FrontController::class,'registration'])->name('registration.post');
  Route::post('/getEntryRpt',[FrontController::class,'getStudentEntryRpt'])->name('getEntryRpt.Student');
  
   Route::get('logout', [AuthController::class, 'logout'])->name('logout');
  
   

//});

