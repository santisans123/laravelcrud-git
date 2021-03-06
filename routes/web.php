<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\MessageController;
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

Route::get('/',[HomeController::class,'index']);
Route::resource('posts', PostController::class);
Route::resource('messages', MessageController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/view',[PostController::class,'view'])->name('view');
Route::get('/edit',[PostController::class,'index']);
Route::get('/acara/cari',[PostController::class,'cari'])->name('acara.cari');
Route::get('/cariuser',[PostController::class,'cariuser'])->name('cariuser');

Route::get('/message',[MessageController::class,'index'])->name('message');
Route::get('/caripesan',[MessageController::class,'caripesan'])->name('caripesan');

