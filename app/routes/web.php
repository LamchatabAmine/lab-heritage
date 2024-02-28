<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personne\PersonneController;


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



Route::prefix('stagiaire')->group(function () {
    Route::get('/', [PersonneController::class, 'index'])->name('stagiaire.index');
    Route::get('/form-ajouter', [PersonneController::class, 'create'])->name('stagiaire.create');
    Route::post('/ajouter', [PersonneController::class, 'store'])->name('stagiaire.store');
    Route::get('/{id}', [PersonneController::class, 'show'])->name('stagiaire.show');
    Route::get('/{id}/edit', [PersonneController::class, 'edit'])->name('stagiaire.edit');
    Route::post('/{id}/update', [PersonneController::class, 'update'])->name('stagiaire.update');
    Route::delete('/{id}/delete', [PersonneController::class, 'delete'])->name('stagiaire.delete');
});


// Define the namespace for controllers within the personne folder
$namespace = 'App\Http\Controllers\Personne';

// Namespace all routes within this file
Route::namespace($namespace)->group(function () {
    Route::prefix('formateur')->group(function () {
        Route::get('/', [PersonneController::class, 'index'])->name('formateur.index');
        Route::get('/form-ajouter', [PersonneController::class, 'create'])->name('formateur.create');
        Route::post('/ajouter', [PersonneController::class, 'store'])->name('formateur.store');
        Route::get('/{id}', [PersonneController::class, 'show'])->name('formateur.show');
        Route::get('/{id}/edit', [PersonneController::class, 'edit'])->name('formateur.edit');
        Route::post('/{id}/update', [PersonneController::class, 'update'])->name('formateur.update');
        Route::delete('/{id}/delete', [PersonneController::class, 'delete'])->name('formateur.delete');
    });
});
