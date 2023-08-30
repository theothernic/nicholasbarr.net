<?php

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

Route::get('/', [\App\Http\Controllers\PageController::class, 'front'])->name('frontpage');

Route::prefix('journal')->group(function () {
    Route::get('/', [\App\Http\Controllers\JournalController::class, 'index'])->name('journal.index');
    Route::get('/{slug}.html', [\App\Http\Controllers\JournalController::class, 'show'])->name('journal.show');
});
