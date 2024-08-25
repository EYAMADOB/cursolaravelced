<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    /*Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);*/



    Route::get('estudiantes/create','App\Http\Controllers\EstudiantesController@create')->name("estudiante.create");
    Route::post('estudiante/store','App\Http\Controllers\EstudiantesController@store')->name("estudiante.store");
    Route::get('estudiantes/index','App\Http\Controllers\EstudiantesController@index')->name("estudiante.index");
    Route::put('estudiantes/update/{id}','App\Http\Controllers\EstudiantesController@update')->name('estudiantes.update');
    Route::get('estudiantes/{id}','App\Http\Controllers\EstudiantesController@edit')->name('estudiantes.edit');
    Route::delete('estudiantes/{id}/eliminar','App\Http\Controllers\EstudiantesController@delete')->name('estudiantes.delete');
 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

