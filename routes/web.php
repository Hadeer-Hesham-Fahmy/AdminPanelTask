<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAdmin;
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

route::get('/',[HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect'])->middleware(['isadmin'])->name('redirect');
route::get('/view_company',[AdminController::class,'view_company']);
route::post('/add_company',[AdminController::class,'add_company']);
route::get('/delete_company/{id}',[AdminController::class,'delete_company']);
route::get('/view_employee',[AdminController::class,'view_employee']);
route::post('/add_employee',[AdminController::class,'add_employee']);

route::get('/show_employee',[AdminController::class,'show_employee']);
route::get('/delete_employee/{id}',[AdminController::class,'delete_employee']);
route::get('/update_employee/{id}',[AdminController::class,'update_employee']);
route::get('/update_company/{id}',[AdminController::class,'update_company']);



route::post('/update_employee_confirm/{id}',[AdminController::class,'update_employee_confirm']);
route::post('/update_company_confirm/{id}',[AdminController::class,'update_company_confirm']);

