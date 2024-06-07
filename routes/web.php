<?php

use App\Http\Controllers\ContaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/conta', [ContaController::class, 'index'])->name('conta.index');
    Route::get('/conta/novaconta', [ContaController::class, 'novaconta'])->name('conta.novaconta');
    Route::post('/conta/novaconta', [ContaController::class, 'store'])->name('conta.store');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('fornecedores.index');
    Route::get('/fornecedores/novofornecedor', [FornecedorController::class, 'novofornecedor'])->name('fornecedores.novofornecedor');
    Route::post('/fornecedores/novofornecedor', [FornecedorController::class, 'store'])->name('fornecedores.store');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
