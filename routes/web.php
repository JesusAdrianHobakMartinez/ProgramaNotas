<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; //AGREGUE CONTROLADOR
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CornellnoteController;
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

//de esta forma ya puedo pasar datos
Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//de esta forma ya puedo pasar datos
Route::get('/notas', [CornellnoteController::class, 'index'])->middleware(['auth', 'verified'])->name('notas');

//de esta forma ya puedo pasar datos
Route::get('/notas/{id}', [CornellnoteController::class, 'show'])->middleware(['auth', 'verified'])->name('notas.show');

//de esta forma ya puedo pasar datos
Route::get('/asignaturas', [SubjectController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas');

//de esta forma ya puedo pasar datos
Route::get('/asignaturas/{id}', [SubjectController::class, 'show'])->middleware(['auth', 'verified'])->name('subjects.show');
Route::post('cornellnote/create', [CornellnoteController::class, 'create'])->name('cornellnote.create');
//CRUD CREADO
Route::resource('/cornellnote', CornellnoteController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//para la lista
Route::resource('Users',UserController::class);



require __DIR__.'/auth.php';

