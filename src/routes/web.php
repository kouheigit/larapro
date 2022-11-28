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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){

        Route::get('testform',[App\Http\Controllers\Admin\TestformController::class,'index'])->name('testform');
        Route::post('testform',[App\Http\Controllers\Admin\TestformController::class,'indexpost'])->name('testform');

        Route::get('secondform',[App\Http\Controllers\Admin\SomeController::class,'secondform'])->name('secondform');

        Route::get('jstest',[App\Http\Controllers\Admin\SomeController::class,'jstest'])->name('jstest');

        Route::get('someform',[App\Http\Controllers\Admin\SomeController::class,'index'])->name('someform');

        Route::get('login',[App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class,'create'])->name('login');
        Route::post('login',[App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class,'store'])->name('adminlogin');
    });

        Route::get('dashboard',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');

    Route::post('logout',[App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class,'destroy'])->name('logout');
});
