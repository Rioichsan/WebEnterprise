<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

Route::get('/biodata', function () {
    $data = [
        'name' =>'RIO ICHSAN WAHDANA',
        'age_ttl' => '20/Cirebon, 05-01-2004',
        'NIM' => '41522010151',
        'Alamat' => 'Jl.H.Nurisan',
        'no_hp' => '083877985851',
        'Email' => 'puspitaatan@gmail.com'
    ];
    return view('biodata', compact('data'));
});

Route::get('/deskripsi', function () {
    return view('deskripsi');
});
