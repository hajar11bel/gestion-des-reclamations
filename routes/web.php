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
<<<<<<< HEAD

Route::get('/addUser', function () {
    return view('admin.ajouterUser');
});

Route::get('/user/dashuser', function () {
    return view('user.dashuser');
});
Route::post('ajouterreclamation', [ReclamationController::class, 'ajouterreclamation']);
Route::get('suivreReclamation', [ReclamationController::class, 'suivreReclamation']);
 
Route::get('historique', [ReclamationController::class, 'historique']);

Route::get('/logiin', function () {
    return view('admin.login');
    } );
Route::get('/dash', function () {
    return view('admin.dash');
});
Route::get('/addPersonnel', function () {
    return view('admin.ajouterPerso');
});

Route::get('/gesUsers', [AdminController::class, 'gesUsers'])->name('users.gesUsers');

Route::get('/gesPerso', function () {
    return view('admin.gesPerso');
});
Route::get('/gesRecla', function () {
    return view('admin.gesRecla');
});

Route::delete('/delet/{id}', [AdminController::class, 'delet']);

Route::get('/login-perso', function () {
    return view('personnel.login-perso');
    });
    
Route::get('gesRecla', [ReclamationController::class, 'gesRecla']);
=======
Route::get('historique', [ReclamationController::class, 'historique']);
Route::get('suivreReclamation', [ReclamationController::class, 'suivreReclamation']);
Route::post('ajouterreclamation', [ReclamationController::class, 'ajouterreclamation']);
>>>>>>> 34c8e551c1f76f7cd0046ac7e71beb31439baccc
Route::delete('/delete/{id}', [ReclamationController::class, 'delete']);

















Auth::routes();

