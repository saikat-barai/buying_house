<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/register', [AdminController::class, 'admin_register'])->name('admin.register');
Route::post('/admin/store', [AdminController::class, 'admin_store'])->name('admin.store');
Route::get('/admin/login', [AdminController::class, 'admin_login'])->name('admin.login');
Route::post('/login/admin', [AdminController::class, 'login_admin'])->name('login.admin');



Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // category route start 
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');
    Route::get('/category/show/{id}', [CategoryController::class, 'category_show'])->name('category.show');
    Route::post('/category/update', [CategoryController::class, 'category_update'])->name('category.update');
    Route::get('/category.delete/{id}', [CategoryController::class, 'category_delete'])->name('category.delete');
    // category route end


    // produt route start 
    Route::get('/product', [ProductController::class, 'product'])->name('product');
    Route::get('/product/add', [ProductController::class, 'product_add'])->name('product.add');
    Route::post('/getcategory', [ProductController::class, 'getcategory'])->name('getcategory');
    Route::post('/product/store', [ProductController::class, 'product_store'])->name('product.store');
    Route::get('/product/show/{id}', [ProductController::class, 'product_show'])->name('product.show');
    Route::get('/product/delete/{id}', [ProductController::class, 'product_delete'])->name('product.delete');
    Route::post('/product/update', [ProductController::class, 'product_update'])->name('product.update');
    // produt route end

});


