<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamationController;

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
    return view('welcome');
});
Route::get('/logiin', function () {
    return view('user.login');
});
Route::get('/dashuser', function () {
    return view('user.dashuser');
});

Route::get('/reclamation', function () {
    return view('user.reclamation');
});
Route::post('ajouterreclamation', [ReclamationController::class, 'ajouterreclamation']);
Route::get('suivreReclamation', [ReclamationController::class, 'suivreReclamation']);
 
Route::get('historique', [ReclamationController::class, 'historique']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
