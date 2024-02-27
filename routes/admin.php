<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ReclamationController;
use Illuminate\Support\Facades\Route;




Route::view('/admin/login','admin.login');
Route::post('/admin/login',[AdminController::class,'login']);




Route::view('/admin/ajouterPerso','admin.ajouterPerso');
Route::post('/admin/ajouterPerso',[AdminController::class,'ajouterPerso']);


Route::view('/admin/ajouterUser','admin.ajouterUser');
Route::post('/admin/ajouterUser',[AdminController::class,'ajouterUser']);



Route::view('/admin/registre','admin.register');
Route::post('/admin/registre',[AdminController::class,'registre']);


Route::get('gesPerso', [AdminController::class, 'gesPerso']);




Route::get('/gesRecla', function () {
    return view('admin.gesRecla');
});

Route::view('/dash','admin.dash');

Route::post('/dash', function () {
    return view('admin.dash');
});

Route::get('/logn', function () {
    return view('admin.login');
    } );

Route::get('/addPersonnel', function () {
    return view('admin.ajouterPerso');
});






Route::get('/edit/{id}',  [AdminController::class, 'edit']);
Route::put('/update/{id}',  [AdminController::class, 'updateUser']);
Route::put('/updatePerso/{id}',  [AdminController::class, 'updatePerso']);


Route::get('/editPerso/{id}',  [AdminController::class, 'editPerso']);
Route::delete('/delet/{id}', [AdminController::class, 'delet']);
Route::get('/gesUsers', [AdminController::class, 'gesUsers'])->name('users.gesUsers');
Route::get('gesRecla', [ReclamationController::class, 'gesRecla']);




