<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\Homecontroller;

use App\Http\controllers\Admincontroller;

use App\Http\controllers\StaffController;

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
Route::get('/',function(){
    return view('welcome');
});

Route::get('/',[Homecontroller::class,'index']);

Route::get('/home',[Homecontroller::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/view_student',[Admincontroller::class,'view_student']);

Route::get('/staff_management',[Admincontroller::class,'staff_management']);

Route::post('/add_staff',[Admincontroller::class,'add_staff']);

Route::get('/delete_staff/{id}',[Admincontroller::class,'delete_staff']);

Route::get('/delete_std/{id}',[Admincontroller::class,'delete_std']);

Route::get('/export/excel', [Admincontroller::class,'exportToExcel'])->name('export.excel');

Route::get('/std_detail',[StaffController::class,'std_detail']);

Route::get('/staff_detail',[StaffController::class,'staff_detail']);

Route::get('/about',[Homecontroller::class,'about']);
