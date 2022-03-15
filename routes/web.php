<?php

use App\Http\Controllers\{
    WordController,
    SentenceController,
    LanguageController
};
use Illuminate\Support\Facades\Route;

Route::get('/words',[WordController::class, 'index']);
Route::get('/sentences',[SentenceController::class, 'index']);
Route::get('/languages',[LanguageController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
