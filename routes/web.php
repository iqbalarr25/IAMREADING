<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Show;
use App\Http\Livewire\DetailTransaksi;
use App\Http\Livewire\Search;
use App\Http\Livewire\Cart;
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
Route::get('/', Dashboard::class)->name('/');
Route::get('/detailtransaksi/{id}', DetailTransaksi::class);
Route::get('/show/{id}', Show::class);
Route::get('/search/{judul}', Search::class);
Route::get('/cart', Cart::class)->middleware('auth');


require __DIR__.'/auth.php';
