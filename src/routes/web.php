<?php

use App\Http\Controllers\allController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth','is_admin'])->group(function (){
    Route::resource('/users',allController::class);    
});
    
    Route::controller(UserControler::class)->group(function (){
        Route::get('/','index')->name('login');
        Route::post('/','store')->name('user.store');
        
        Route::get('/create','register')->name('register'); //erro da page não aceita get post
        Route::post('/creates','create')->name('user.create');

        
        Route::post('/delete/{id}/delete','delete')->name('user.delete');

    Route::get('/logout','destroy')->name('user.destroy');
});
Route::controller(HomeController::class)->group(function (){
    Route::get('/home','index')->name('home.index');
 
});



