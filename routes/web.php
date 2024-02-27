<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\SiteController;


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

Route::get('/', function () {
    return view('pages.login');
});




Route::get('/', function () {
    return view('pages.login');
});
Route::get('/register', function () {
    return view('pages.register');
});

// Route::middleware('checkSession')->group(function () {
       
// ComplaintController 
Route::get('/add-complaint', [ComplaintController::class, 'add_complaint'])->name('add-complaint');
Route::post('/save-complaint', [ComplaintController::class, 'create'])->name('save-complaint');
// Route::get('/view-complaint', [ComplaintController::class, 'view_complaint'])->name('view-complaint');
Route::get('/view-pia-complaint', [ComplaintController::class, 'view_pia'])->name('view-pia-complaint');
Route::get('/view-breda-complaint', [ComplaintController::class, 'view_breda'])->name('view-breda-complaint');
Route::get('/view-district-complaint', [ComplaintController::class, 'view_district'])->name('view-district-complaint');
// Route::get('/close/{id}', [ComplaintController::class, 'edit'])->name('close');
Route::post('/update-complaint', [ComplaintController::class, 'update'])->name('update-complaint');
Route::any('/send-otp', [ComplaintController::class, 'sendOTP'])->name('send-otp');

// ComplaintController 

// UserController
Route::get('/add-user', [UserController::class, 'index'])->name('add-user');
Route::post('/save-user', [UserController::class, 'create'])->name('save-user');
Route::get('/view-user', [UserController::class, 'view_user'])->name('view-user');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('/update-user', [UserController::class, 'update'])->name('update-user');
Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

// UserController
// SiteController
Route::get('/add-site', [SiteController::class, 'index'])->name('add-site');
Route::post('/save-site', [SiteController::class, 'create'])->name('save-site');
Route::get('/view-site', [SiteController::class, 'view_site'])->name('view-site');
Route::get('/edit/{id}', [SiteController::class, 'edit'])->name('edit');
Route::post('/update-site', [SiteController::class, 'update'])->name('update-site');
Route::get('/delete/{id}', [SiteController::class, 'destroy'])->name('delete');
// LoginController
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// LoginController


    //    });
   
// LoginController 
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'],'/loginuser',[LoginController::class,'loginuser'])->name('loginuser');
// LoginController 

