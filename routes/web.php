<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PromotionController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Clients\ClientsController;
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
//Khang
Route::controller(ClientsController::class)->group(function () {
    Route::get('/', 'index')->name('client.page.home.index');
    Route::get('/product', 'page_product')->name('client.page.product');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.page.dashboard');
        Route::controller(CategoryController::class)->prefix('/category')->group(function () {
            Route::get('/', 'index')->name('admin.page.category.index');
            Route::get('/add', 'create')->name('admin.page.category.create');
            Route::post('/add',  'store');
            Route::get('/update/{id}', 'edit')->name('admin.page.category.edit');
            Route::post('/update/{id}',  'update');
            Route::delete('/{id}',  'destroy')->name('admin.page.category.delete');
        });
        Route::controller(PromotionController::class)->prefix('/promotion')->group(function () {
            Route::get('/', 'index')->name('admin.page.promotion.index');
            Route::get('/add', 'create')->name('admin.page.promotion.create');
            Route::post('/add', 'store');
            Route::get('/update/{id}', 'edit')->name('admin.page.promotion.edit');
            Route::post('/update/{id}', 'update');
            Route::delete('/{id}', 'destroy')->name('admin.page.promotion.delete');
        });
        Route::controller(ProductController::class)->prefix('/product')->group(function () {
            Route::get('/', 'index')->name('admin.page.product.index');
            Route::get('/add', 'create')->name('admin.page.product.create');
            Route::post('/add', 'store');
            Route::get('/update/{id}', 'edit')->name('admin.page.product.edit');
            Route::post('/update/{id}', 'update');
            Route::delete('/{id}', 'destroy')->name('admin.page.product.delete');
        });
        Route::controller(SupplierController::class)->prefix('/supplier')->group(function () {
            Route::get('/', 'index')->name('admin.page.supplier.index');
            Route::get('/add', 'create')->name('admin.page.supplier.create');
            Route::post('/add', 'store');
            Route::get('/update/{id}', 'edit')->name('admin.page.supllier.edit');
            Route::post('/update/{id}', 'update');
            Route::delete('/{id}', 'destroy')->name('admin.page.supllier.delete');
        });
        Route::controller(UsersController::class)->prefix('/user')->group(function () {
            Route::get('/', 'index')->name('admin.page.user.index');
            Route::get('/add', 'create')->name('admin.page.user.create');
            Route::post('/add', 'store');
            Route::get('/update/{id}', 'edit')->name('admin.page.user.edit');
            Route::post('/update/{id}', 'update');
            Route::delete('/{id}', 'destroy')->name('admin.page.user.delete');
        });
        Route::controller(OrderController::class)->prefix('/order')->group(function () {
            Route::get('/', 'index')->name('admin.page.order.index');
            Route::get('/detail/{id}', 'details')->name('admin.page.order.detail');
        });
    });
});
