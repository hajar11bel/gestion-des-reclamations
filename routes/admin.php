<?php


use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;




Route::view('/admin/login','admin.login');
Route::post('/admin/login',[AdminController::class,'login']);


Route::view('/admin/registre','admin.register');
Route::post('/admin/registre',[AdminController::class,'registre']);
Route::get('gesPerso', [AdminController::class, 'gesPerso']);
Route::delete('/delet/{id}', [AdminController::class, 'delet']);
Route::get('/gesUsers', [AdminController::class, 'gesUsers'])->name('users.gesUsers');


Route::get('/gesRecla', function () {
    return view('admin.gesRecla');
});

Route::view('/dash','admin.dash');

Route::post('/dash', function () {
    return view('admin.dash');
});



