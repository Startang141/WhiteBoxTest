<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\LevelController as AdminLevelController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');

Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::controller(AdminHomeController::class)->group(function(){
            Route::get('home', 'index');
            Route::put('update_profile', 'update_profile');
            Route::put('update_password', 'update_password');
        });
        Route::resource('category', AdminCategoryController::class);
        Route::resource('product', AdminProductController::class);
        Route::resource('order', AdminOrderController::class);
        Route::resource('user', AdminUserController::class);
        Route::resource('level', AdminLevelController::class);
    });
});
