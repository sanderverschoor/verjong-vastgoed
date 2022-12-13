<?php

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


Route::get('/', [App\Http\Controllers\HouseController::class, 'index'])->name('home');

Route::post('/upload-images', [App\Http\Controllers\HouseController::class, 'uploadImages'])->name('upload-images');
Route::post('/send-message', [App\Http\Controllers\HouseController::class, 'sendMessage'])->name('send-message');
route::resource('houses', 'App\Http\Controllers\HouseController');
Route::get('phpmyinfo', function () {
    phpinfo();
})->name('phpmyinfo');


require __DIR__.'/auth.php';
