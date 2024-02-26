<?php

use App\Http\Livewire\CadastrarModulo;
use App\Http\Livewire\GerenciarModulo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('modulo')->group(function () {
        Route::get('/{id}/cadastrar', CadastrarModulo::class)->name('modulo.cadastrar');
        Route::get('/{id}/gerenciar', GerenciarModulo::class)->name('modulo.gerenciar');
    });
});
