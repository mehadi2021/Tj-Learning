<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;

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

Route::get('/',[InformationController::class,'info'])->name('welcome');
Route::get('/insert',[InsertController::class,'insert'])->name('insert');
 Route::post('/store',[InsertController::class,'insertStore'])->name('insert.store');
Route::get('view',[ViewController::class,'view'])->name('show');
    Route::get('view/edit/{id}',[UpdateController::class,'edit'])->name('edit');
    Route::put('view/update/{id}',[UpdateController::class,'update'])->name('update.store');
    Route::get('view/delete/{id}',[DeleteController::class,'delete'])->name('delete');