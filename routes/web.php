<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
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
    return view('admin.home.index');
});

Auth::routes();

Route::resource('admin/category', CategoryController::class);

Route::resource('admin/product', ProductController::class);

Route::resource('admin/order', OrderController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
