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
// Route::controller(allController::class)->group(function (){
//     Route::get('/user','teste')->name('test.usser');
// });

Route::controller(UserControler::class)->group(function (){
    // Route::get('/','index')->name('user.index');
    Route::get('/','index')->name('login');
    Route::post('/','store')->name('user.store');
   

    // Route::get('/forgot','forgot')->name('user.forgot');
    // Route::post('/forgot','forgotup')->name('user.forgot');
    Route::get('/users/create','register')->name('register');
    Route::post('/create','create')->name('create.register');

    // Route::get('/users/{user}/edit', 'edit')->name('editu.index');
    // Route::post('/users/{user}/edit','editup')->name('user.edit');
    // Route::put('/users/{user}','update')->name('user.update');
    
    // Route::delete('/users/{user}','delete')->name('user.detele');

    // Route::post('/','delete')->name('user.delete');    
    Route::get('/logout','destroy')->name('user.destroy');
});
Route::controller(HomeController::class)->group(function (){
    Route::get('/home','index')->name('home.index');
    // Route::get('/home', 'image')->name('home.image');
    // Route::post('/','store')->name('user.store');
    // Route::post('/','create')->name('user.create');
    // Route::put('/','edit')->name('user.edit');
    // Route::post('/','delete')->name('user.delete');    
    // Route::get('/logout','destroy')->name('user.destroy');
});

// Route::post('/users',[UserControler::class,'login'])->name('auth.user');




// require __DIR__.'auth.php';