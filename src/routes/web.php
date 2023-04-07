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

        Route::get('jschange2',[App\Http\Controllers\Admin\SomeController::class,'jschange2'])->name('jschange2');

        Route::get('ajaxtest',[App\Http\Controllers\Admin\SomeController::class,'ajaxtest'])->name('ajaxtest');

        Route::get('jschangeajax',[App\Http\Controllers\Admin\SomeController::class,'jschangeajax'])->name('jschangeajax');

        Route::get('jschange1',[App\Http\Controllers\Admin\SomeController::class,'jschange1'])->name('jschange1');
        Route::get('jschangeajax1',[App\Http\Controllers\Admin\SomeController::class,'jschangeajax1'])->name('jschangeajax1');

        Route::get('jschange',[App\Http\Controllers\Admin\SomeController::class,'jschange'])->name('jschange');

        Route::get('searchtest',[App\Http\Controllers\Admin\SomeController::class,'searchtest'])->name('searchtest');

        Route::get('ajaxtest',[App\Http\Controllers\Admin\SomeController::class,'ajaxtest'])->name('ajaxtest');

        Route::get('jstest3',[App\Http\Controllers\Admin\SomeController::class,'jstest3'])->name('jstest3');
        Route::get('jsget3',[App\Http\Controllers\Admin\SomeController::class,'jsget3'])->name('jsget3');

        Route::get('jswage',[App\Http\Controllers\Admin\SomeController::class,'jswage'])->name('jswage');

        Route::get('wageget',[App\Http\Controllers\Admin\SomeController::class,'wageget'])->name('wageget');

        Route::get('somejs',[App\Http\Controllers\Admin\SomeController::class,'somejs'])->name('somejs');

        Route::get('fixwave',[App\Http\Controllers\Admin\SomeController::class,'fixwave'])->name('fixwave');
        Route::get('jsajax',[App\Http\Controllers\Admin\SomeController::class,'jsajax'])->name('jsajax');
        Route::get('jstest1',[App\Http\Controllers\Admin\SomeController::class,'jstest1'])->name('jstest1');
        Route::get('jstest2',[App\Http\Controllers\Admin\SomeController::class,'jstest2'])->name('jstest2');

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
