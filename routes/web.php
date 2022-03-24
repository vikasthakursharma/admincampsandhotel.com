<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\ProfileController;
use App\Models\Banner;
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
// ------login logout register routes ------------------------------------//
Route::get('/', [AuthController::class, 'index'])->name('name.login');
Route::get('/admin/auth/login', [AuthController::class, 'index'])->name('name.login');
Route::post('/admin/auth/login', [AuthController::class, 'login'])->name('name.login');
Route::get('/admin/auth/logout', [AuthController::class, 'logout'])->name('backend.users');

Route::get('/admin/auth/register', [AuthController::class, 'register_user'])->name('backend.register');
Route::post('/admin/auth/register', [AuthController::class, 'register'])->name('backend.register');


// no access
Route::get('not-access', function () {

    return view('backend.layouts.errors-404');
});

// ----- no access without login -----------//
Route::middleware(['admin.guard'])->group(function () {
    // home page
    Route::get('/home', [BackendController::class, 'index']);

    // ----------- banner view routes ---------------------------------------------//
    Route::get('admin/banner/', [BannerController::class, 'index'])->name('name.index');

    // --------------------- banner add, edit and delete routes ----------------------------------//
    Route::get('admin/banner/create', [BannerController::class, 'add_banner'])->name('name.create');
    Route::post('admin/banner/create', [BannerController::class, 'store'])->name('name.create');
    Route::get('admin/banner/edit/{id}', [BannerController::class, 'edit'])->name('name.edit');

    Route::get('admin/banner/update/{id}', [BannerController::class, 'update'])->name('name.update');
    Route::post('admin/banner/update/{id}', [BannerController::class, 'update'])->name('name.update');
    Route::get('admin/banner/delete/{id}', [BannerController::class, 'delete'])->name('name.delete');

    // ------------- delte image ---------------------//
    Route::get('/delete-image/{id}/{image}', [BannerController::class, 'deleteImage']);

    //------------- admin user profile ----------------------//
    Route::get('admin/profile', [ProfileController::class, 'index'])->name('admin.profile');

    // ------------ users -----------------------------//
    Route::get('/admin/users', [UsersController::class, 'index'])->name('backend.users');
});



