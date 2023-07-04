<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;


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
    return view('teams.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware('auth')->group(function () {
//Teams Route
Route::resource('teams', TeamController::class);

//Games Route
Route::controller(GameController::class)->group(function(){
    Route::get('games/create/{id}','create')->name('games.create');
    Route::post('games','store')->name('games.store');
    Route::get('games/{game}','show')->name('games.show');
    Route::get('games','index')->name('games.index');
    Route::get('games/{game}/edit','edit')->name('games.edit');
    Route::put('games/{game}','update')->name('games.update');
    Route::delete('games/{game}','destroy')->name('games.destroy');

});
});

