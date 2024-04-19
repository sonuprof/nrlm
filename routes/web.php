<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StateDataController;
use App\Http\Controllers\PEController;
use App\Http\Controllers\PGController;
use App\Http\Controllers\FPOController;

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
    return view('pages.dashboard');
});
Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/detail', [StateDataController::class, 'detail'])->name('detail');
Route::get('/blocks/{id}', [StateDataController::class, 'blocks'])->name('blocks');


Route::any('/save-clicked-state/{state?}', [StateDataController::class, 'saveClickedState'])->name('saveClickedState');

Route::get('/dashboard', [StateDataController::class, 'dashboard'])->name('dashboard');


// Route::middleware('checkSession')->group(function () {
       


// ComplaintController 

// PEController
Route::get('/add-PE', [PEController::class, 'index'])->name('add-PE');
Route::post('/save-PE', [PEController::class, 'create'])->name('save-PE');

Route::get('/view-PE', [PEController::class, 'view_PE'])->name('view-PE');
Route::get('/edit/{id}', [PEController::class, 'edit'])->name('edit');
Route::post('/update-PE', [PEController::class, 'update'])->name('update-PE');
Route::get('/delete/{id}', [PEController::class, 'destroy'])->name('delete');
Route::get('/PE-state/{state}', [PEController::class, 'getState'])->name('PE-state');
Route::get('/PE-districts/{district}', [PEController::class, 'getDistrict'])->name('PE-districts');
Route::get('/view-PEimport', [PEController::class, 'view_pe_import'])->name('view-PEimport');
Route::post('/PEimport', [PEController::class, 'PEimport'])->name('PEimport');

// PEController


// PGController
Route::get('/add-PG', [PGController::class, 'index'])->name('add-PG');
Route::post('/save-PG', [PGController::class, 'create'])->name('save-PG');

Route::get('/view-PG', [PGController::class, 'view_PG'])->name('view-PG');
Route::get('/edit/{id}', [PGController::class, 'edit'])->name('edit');
Route::post('/update-PG', [PGController::class, 'update'])->name('update-PG');
Route::get('/delete/{id}', [PGController::class, 'destroy'])->name('delete');
Route::get('/PG-state/{state}', [PGController::class, 'getState'])->name('PG-state');
Route::get('/PG-districts/{district}', [PGController::class, 'getdistrict'])->name('PG-districts');

Route::get('/view-PGimport', [PGController::class, 'view_pg_import'])->name('view-PGimport');
Route::post('/PGimport', [PGController::class, 'PGimport'])->name('PGimport');

// PGController

// FPOController
Route::get('/add-FPO', [FPOController::class, 'index'])->name('add-FPO');
Route::post('/save-FPO', [FPOController::class, 'create'])->name('save-FPO');
Route::get('/view-FPO', [FPOController::class, 'view_FPO'])->name('view-FPO');
Route::get('/edit/{id}', [FPOController::class, 'edit'])->name('edit');
Route::post('/update-FPO', [FPOController::class, 'update'])->name('update-FPO');
Route::get('/delete/{id}', [FPOController::class, 'destroy'])->name('delete');
Route::get('/FPO-state/{state}', [FPOController::class, 'getState'])->name('FPO-state');
Route::get('/FPO-districts/{district}', [FPOController::class, 'getdistrict'])->name('FPO-districts');

Route::get('/view-FPOimport', [FPOController::class, 'view_fpo_import'])->name('view-FPOimport');
Route::post('/FPOimport', [FPOController::class, 'FPOimport'])->name('FPOimport');
// FPOController



// LoginController
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// LoginController


    //    });
   
// LoginController 
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'],'/loginuser',[LoginController::class,'loginuser'])->name('loginuser');
// LoginController 

