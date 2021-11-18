<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\RegisterTiemController;
use App\Http\Controllers\Admin\UpImgController;
use App\Http\Controllers\Health_Declaration\Health_DeclarationController;
use App\Http\Controllers\Insert\InsertController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\News\NewsController as NewsNewsController;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Http\Controllers\MainController as Main;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('test', [PageController::class, 'getNewLates']);

Route::prefix('/')->group(function () {
  Route::get('/', [Main::class, 'index'])->name('/');
  Route::get('/', [NewsNewsController::class, 'index'])->name('/');
  Route::get('contact', [Main::class, 'contact'])->name('contact-us');
    Route::get('/', [Main::class, 'index'])->name('/');
    Route::get('contact', [Main::class, 'contact'])->name('contact-us');

    Route::get('/', [PageController::class, 'getCategory']);
    //route news
    Route::get('/', [PageController::class, 'getNewLates'])->name('/');
    Route::get('category/{id}', 'PageController@getBycategory');
});

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login/store', [LoginController::class, 'store'])->name('login-store');
Route::post('login/registration', [LoginController::class, 'registration'])->name('regis-user');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//router get post trang dk tiem
Route::get('dangkytiem/dangky', [InsertController::class, 'view']);
Route::post('dangkytiem/dangky', [InsertController::class, 'create'])->name('inject-register');

//router ajax trang dk tiem
Route::get('dangkytiem/dangky', [InsertController::class, 'index']);
Route::get('getDistrict', [InsertController::class, 'getDistrict'])->name('getDistrict');
Route::get('getWard', [InsertController::class, 'getWard'])->name('getWard');

//router get post trang  khai báo y tế
Route::get('khaibaoyte/khaibao', [Health_DeclarationController::class, 'view']);
Route::post('khaibaoyte/khaibao', [Health_DeclarationController::class, 'create'])->name('khaibaoyte/khaibao');

//router ajax trang khai báo y tế
Route::get('khaibaoyte/khaibao', [Health_DeclarationController::class, 'index']);
Route::get('getDistrict', [Health_DeclarationController::class, 'getDistrict'])->name('getDistrict');
Route::get('getWard', [Health_DeclarationController::class, 'getWard'])->name('getWard');

Route::middleware(['auth', 'admin'])->group(function () {
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

        # hiển thi danh sách đăng ký tiêm
        Route::prefix('register_tiem')->group(function () {
            Route::get('list', [RegisterTiemController::class, 'index'])->name('list');
        });
    });
});
