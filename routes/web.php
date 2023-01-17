<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopgridController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

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

Route::get('/', [ShopgridController::class, 'index'])->name('home');
Route::get('/category-product/{id}', [ShopgridController::class, 'category'])->name('category');
Route::get('/sub-category-product/{id}', [ShopgridController::class, 'subCategory'])->name('sub-category');
Route::get('/detail-product-info/{id}', [ShopgridController::class, 'detail'])->name('detail');

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-new-category', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/create-new-category', [CategoryController::class, 'create'])->name('category.new');
    Route::get('/manage-category', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/add-new-sub-category', [SubCategoryController::class, 'index'])->name('sub-category.add');
    Route::post('/create-new-sub-category', [SubCategoryController::class, 'create'])->name('sub-category.new');
    Route::get('/manage-sub-category', [SubCategoryController::class, 'manage'])->name('sub-category.manage');
    Route::get('/edit-sub-category/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/update-sub-category/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/delete-sub-category/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');

    Route::get('/add-new-brand', [BrandController::class, 'index'])->name('brand.add');
    Route::post('/create-new-brand', [BrandController::class, 'create'])->name('brand.new');
    Route::get('/manage-brand', [BrandController::class, 'manage'])->name('brand.manage');
    Route::get('/edit-brand/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/update-brand/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/delete-brand/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/add-new-unit', [UnitController::class, 'index'])->name('unit.add');
    Route::post('/create-new-unit', [UnitController::class, 'create'])->name('unit.new');
    Route::get('/manage-unit', [UnitController::class, 'manage'])->name('unit.manage');
    Route::get('/edit-unit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/update-unit/{id}', [UnitController::class, 'update'])->name('unit.update');
    Route::get('/delete-unit/{id}', [UnitController::class, 'delete'])->name('unit.delete');

    Route::get('/add-new-product', [ProductController::class, 'index'])->name('product.add');
    Route::get('/get-sub-category-by-category', [ProductController::class, 'getSubCategory'])->name('product.get-sub-category');
    Route::post('/create-new-product', [ProductController::class, 'create'])->name('product.new');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('product.manage');
    Route::get('/product-detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('product.delete');

    Route::get('/manage-order', [OrderController::class, 'manage'])->name('order.manage');

    Route::get('/add-new-user', [UserController::class, 'index'])->name('user.add');
    Route::get('/manage-user', [UserController::class, 'manage'])->name('user.manage');
});
