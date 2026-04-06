<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\InicioController::class, 'index'])->name('home');


// Páginas legales
Route::view('/privacidad', 'legal.privacidad')->name('web.legal.privacidad');
Route::view('/cookies', 'legal.cookies')->name('web.legal.cookies');
Route::view('/aviso-legal', 'legal.aviso-legal')->name('web.legal.aviso-legal');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::livewire('dashboard/eventos', 'pages::events.index')->name('events.index');
});



require __DIR__.'/settings.php';