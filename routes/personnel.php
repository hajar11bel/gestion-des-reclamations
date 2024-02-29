<?php


use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;




Route::prefix('personnel')->group(function () {


Route::view('/personnel/login','personnel.login');
Route::post('/personnel/login',[PersonnelController::class,'login']);

Route::post('/store', [PersonnelController::class, 'store']);
Route::get('/personnel/personnel', [PersonnelController::class, 'personnel']);

Route::view('/personnel/reg','personnel.reg');
Route::post('/personnel/reg',[PersonnelController::class,'reg']);


Route::post('/personnel/personnel', [PersonnelController::class, 'login']);

Route::get('/login', function () {
    return view('personnel.login');
});
Route::get('/gesRecla', [ReclamationController::class, 'gesRecla']);

Route::post('/update/{id}', [ReclamationController::class, 'update'])->name('update.reclamation');

Route::delete('/del/{id}', [PersonnelController::class, 'del']);

<<<<<<< HEAD
Route::post('/personnel/logout', [PersonnelController::class, 'logout']);
=======



});
>>>>>>> 34ce1d8733faee5943f3798d5ceef512df6d15b0
