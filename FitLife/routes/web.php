<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Creneaux;

Route::get('/', function () {
    $creneauxes = Creneaux::with('cour')->latest()->paginate(7);
    return view('accueil',['creneauxes'=>$creneauxes]);
});

Route::get('/dashboard', function () {
    $creneauxes = Creneaux::with('cour')->latest()->paginate(7);
    return view('accueil',['creneauxes'=>$creneauxes]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile', ['user' => auth()->user()]);
    });
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
