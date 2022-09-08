<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Http\Request;
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
Route::redirect(uri: '/anasayfa', destination: '/home');
Route::get('/', function () {
    return view('home.index');
});
//HOME PAGE ROUTES
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');


Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/service/{id}', [HomeController::class, 'service'])->name('service');
Route::post('/storeappointment', [HomeController::class, 'storeappointment'])->name('storeappointment');


//ADMIN PANEL ROUTES
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    //ADMIN GENERAL ROUTES
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingupdate'])->name('settingupdate');
    //ADMIN CATEGORY ROUTES
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });
    //ADMIN SERVICE ROUTES
    Route::prefix('/service')->name('service.')->controller(AdminServiceController::class)->group(function () {
        Route::get('/', [AdminServiceController::class, 'index'])->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });
    //ADMIN IMAGE GALLERY ROUTES
    Route::prefix('/image')->name('image.')->controller(AdminImageController::class)->group(function () {
        Route::get('/{sid}', [AdminImageController::class, 'index'])->name('index');
        Route::post('/store/{sid}', 'store')->name('store');
        Route::get('/delete/{sid}/{id}', 'destroy')->name('delete');
    });
    //ADMIN MESSAGE ROUTES
    Route::prefix('/message')->name('message.')->controller(AdminMessageController::class)->group(function () {
        Route::get('/', [AdminMessageController::class, 'index'])->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
    //ADMIN COMMENT ROUTES
    Route::prefix('/comment')->name('comment.')->controller(AdminCommentController::class)->group(function () {
        Route::get('/', [AdminCommentController::class, 'index'])->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
    //ADMIN FAQ ROUTES
    Route::prefix('/faq')->name('faq.')->controller(AdminFaqController::class)->group(function () {
        Route::get('/', [AdminFaqController::class, 'index'])->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
    //ADMIN APPOINTMENT ROUTES
    Route::prefix('/appointment')->name('appointment.')->controller(AdminAppointmentController::class)->group(function () {
        Route::get('/{slug}', [AdminAppointmentController::class, 'index'])->name('index');
        Route::get('/reject/{id}', 'reject')->name('reject');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
    });
    //ADMIN USER ROUTES
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
    });
}); //admin panel routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
