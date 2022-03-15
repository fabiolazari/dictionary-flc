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

Route::get('/sentences',[SentenceController::class, 'index'])->name('sentences.index');
Route::get('/sentences/create', [SentenceController::class, 'create'])->name('sentences.create');
Route::post('/sentences', [SentenceController::class, 'store'])->name('sentences.store');

Route::get('/languages',[LanguageController::class, 'index'])->name('languages.index');
Route::get('/languages/create', [LanguageController::class, 'create'])->name('languages.create');
Route::post('/languages', [LanguageController::class, 'store'])->name('languages.store');

Route::get('/', function () {
    return view('welcome');
});
