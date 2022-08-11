<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('/about', function () {
    return "เกี่ยวกับเรา";
});

Auth::routes();
// profile
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//asmin index
Route::get('/admin/index',[HomeController::class,'admin'])->name('admin');

//Users
Route::get('/admin/user/index',[UserController::class,'index'])->name('user.index');


//Category
Route::get('/admin/Category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('/admin/Category/create',[CategoryController::class,'createform'])->name('category.create');


//Product
Route::get('/admin/Product/index',[ProductController::class,'index'])->name('product.index');
Route::get('/admin/Product/create',[ProductController::class,'createform'])->name('product.create');


