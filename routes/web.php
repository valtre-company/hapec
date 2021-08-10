<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'homeView'])->name('home');
Route::post('/', [IndexController::class, 'downloadCatalogue'])->name('download.catalogue');

Route::get('/contacto', [IndexController::class, 'contactView'])->name('contact.view');
Route::post('/contacto', [IndexController::class, 'contactSend'])->name('contact.send');
