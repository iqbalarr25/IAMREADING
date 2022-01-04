<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Show;
use App\Http\Livewire\DetailTransaksi;
use App\Http\Livewire\CompletePayment;
use App\Http\Livewire\Search;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Admin;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Address;
use App\Http\Livewire\History;
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
Route::get('/detailtransaksi/{id}', DetailTransaksi::class)->middleware('auth');
Route::get('/complete-payment/{no_invoice}', CompletePayment::class)->middleware('auth');
Route::get('/show/{id}', Show::class);
Route::get('/search/{judul}', Search::class);
Route::get('/cart', Cart::class)->middleware('auth');
Route::get('/admin', Admin::class)->name('admin')->middleware('auth');
Route::get('/profile', Profile::class)->middleware('auth');
Route::get('/address', Address::class)->middleware('auth');
Route::get('/history', History::class)->middleware('auth');

require __DIR__.'/auth.php';
