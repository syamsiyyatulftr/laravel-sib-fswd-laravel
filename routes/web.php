<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

// Route::get('/landing', function () {
//     return view('landing');
// });

Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user', [UserController::class, 'create']);

// ketika sudah mengelink jangan lupa untuk melakukan ->name('xxxxhalaman yang akan ditujuxxx')
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/role', [RoleController::class, 'index'])->name('role.index');

// Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/landing', [LandingController::class, 'index'])->name('landing');
