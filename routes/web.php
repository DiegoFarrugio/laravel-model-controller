<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\MovieController;




Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');

Route::get('/', [MovieController::class, 'index'])->name('movies.index');

Route::get('/movies{id}', [MovieController::class, 'show'])->name('movies.show');


// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
