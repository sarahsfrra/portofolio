<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjekController;

Route::get('/', [PageController::class, 'home']);
Route::get('/dashboard', [ProjekController::class, 'index']);
Route::get('/tambah-portofolio', [PageController::class, 'tambah']);

Route::post('/tambah-portofolio', [ProjekController::class, 'store']);
Route::get('/perbarui-portfolio/{projek}', [ProjekController::class, 'edit'])->name('edit-projek');
Route::put('/perbarui-portofolio/{projek}', [ProjekController::class, 'update'])->name('update-projek');
Route::delete('/delete-portofolio/{projek}', [ProjekController::class, 'destroy'])->name('delete-projek');
