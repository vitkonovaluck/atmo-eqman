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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Auth::routes();

Route::get('/', function (){
    return redirect('/admin');
});

Route::get('/home', function (){
    return redirect('/admin');
});

Route::group(['prefix' => 'admin','namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/message', MessageController::class);
    Route::resource('/invetory_type', InvetoryTypeController::class);
    //Route::resource('/invetory', AInvetoryController::class);

});
