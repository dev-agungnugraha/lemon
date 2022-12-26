<?php

use App\Http\Controllers\Admin\HomeController;
// use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
// Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
// Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
// Route::post('/author', [AuthorController::class, 'store'])->name('author.store');
// Route::get('/author/{author}/edit', [AuthorController::class, 'edit'])->name('author.edit');
// Route::put('/author/{author}', [AuthorController::class, 'update'])->name('author.update');
// Route::delete('/author/{author}', [AuthorController::class, 'destroy'])->name('author.destroy');
Route::get('/author/data', [DataController::class, 'authors'])->name('author.data');
Route::get('/book/data', [DataController::class, 'books'])->name('book.data');
Route::get('/pegawai/data', [DataController::class, 'pegawais'])->name('pegawai.data');
Route::get('/paket/data', [DataController::class, 'pakets'])->name('paket.data');
Route::get('/kontrak/data', [DataController::class, 'kontraks'])->name('kontrak.data');
Route::get('/progreskegiatan/data', [DataController::class, 'progreskegiatans'])->name('progreskegiatan.data');

Route::resources([
    'author' => AuthorController::class,
    'book' => BookController::class,
    'pegawai' => PegawaiController::class,
    'paket' => PaketController::class,
    'kontrak' => KontrakController::class,
    'progreskegiatan' => ProgreskegiatanController::class
]);