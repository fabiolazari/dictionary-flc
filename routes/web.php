<?php

use App\Http\Controllers\{
    WordController,
    SentenceController,
    LanguageController
};
use Illuminate\Support\Facades\Route;

Route::get('/words', [WordController::class, 'index'])->name('words.index');
Route::get('/words/create', [WordController::class, 'create'])->name('words.create');
Route::post('/words', [WordController::class, 'store'])->name('words.store');
Route::get('/words/{id}', [WordController::class, 'show'])->name('words.show');
Route::delete('/words/{id}', [WordController::class, 'destroy'])->name('words.destroy');

Route::get('/sentences',[SentenceController::class, 'index'])->name('sentences.index');
Route::get('/sentences/create', [SentenceController::class, 'create'])->name('sentences.create');
Route::post('/sentences', [SentenceController::class, 'store'])->name('sentences.store');
Route::get('/sentences/{id}', [SentenceController::class, 'show'])->name('sentences.show');
Route::delete('/sentences/{id}', [SentenceController::class, 'destroy'])->name('sentences.destroy');

Route::get('/languages',[LanguageController::class, 'index'])->name('languages.index');
Route::get('/languages/create', [LanguageController::class, 'create'])->name('languages.create');
Route::post('/languages', [LanguageController::class, 'store'])->name('languages.store');
Route::get('/languages/{id}', [LanguageController::class, 'show'])->name('languages.show');
Route::delete('/languages/{id}', [LanguageController::class, 'destroy'])->name('languages.destroy');

Route::get('/', function () {
    return view('welcome');
});
