<?php

use App\Http\Livewire\Categories;
use App\Http\Livewire\Products;
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
    'verified',
])->group(function () {
    Route::get('/productos', Products::class)->name('productos');
    Route::get('/categorias', Categories::class)->name('categorias');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
