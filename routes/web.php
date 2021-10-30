<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UpImgController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Insert\InsertController;
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
Route::get('admin/users/login', [LoginController::class, 'login'])->name('login');
Route::post('admin/users/login/news', [LoginController::class, 'news']);

//router get post trang dk tiem
 Route::get('dk_tiem/insert', [InsertController::class, 'view']);
 Route::post('dk_tiem/insert', [InsertController::class, 'create'])->name('dk_tiem/insert');

//router ajax trang dk tiem
Route::get('dk_tiem/insert',[InsertController::class, 'index']);
Route::get('getDistrict',[InsertController::class, 'getDistrict'])->name('getDistrict');
Route::get('getWard',[InsertController::class, 'getWard'])->name('getWard');


Route::middleware(['auth'])->group(function () {
    # Tao group cho admin
    Route::prefix('admin')->group(function () {
        # ~ admin
        Route::get('/', [MainController::class, 'index'])->name('admin');
        # ~ admin/main
        Route::get('main', [MainController::class, 'index']);

        # Tao group cho category
        Route::prefix('categories')->group(function () {
            # admin/categories/add
            # Chuyen sang trang them danh muc
            Route::get('add', [CategoryController::class, 'addCategory']);
            # Them danh muc
            Route::post('add', [CategoryController::class, 'saveCategory']);
            # Danh sach danh muc
            Route::get('list', [CategoryController::class, 'listCategory']);
            # Xoa danh muc
            Route::DELETE('destroy', [CategoryController::class, 'destroy']);
            # Sua danh muc
            Route::get('edit/{category}', [CategoryController::class, 'show']);
            Route::post('edit/{category}', [CategoryController::class, 'update']);
        });
        # news
        Route::prefix('news')->group(function () {
            Route::get('add', [NewsController::class, 'create']);
            Route::post('add', [NewsController::class, 'store']);
            Route::get('list', [NewsController::class, 'index'])->name('list');
            Route::get('edit/{news}', [NewsController::class, 'show']);
            Route::post('edit/{news}', [NewsController::class, 'update']);
            Route::DELETE('destroy', [NewsController::class, 'destroy']);
        });

        # upload image
        Route::post('upload/services', [UpImgController::class, 'store']);
    });
});
