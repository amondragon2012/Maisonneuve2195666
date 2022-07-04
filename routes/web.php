<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blog', function () {
    return view('welcome');
});

Route::get('/cadriciel20632/maisonneuve2195666/blog', function () {
    return view('welcome');
});

Route::get('etudiant', [EtudiantController::class, 'index'])->name('etudiant');
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.create.post');
Route::get('etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('etudiant/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');