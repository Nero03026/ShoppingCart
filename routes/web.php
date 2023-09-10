<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\OrderController;

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
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 訂單系統
Route::prefix('order')->group(function () {
    Route::get('/step01', [OrderController::class, 'step01'])->name('order.step01');
    Route::post('/store01', [OrderController::class, 'store01'])->name('order.store01');
    Route::get('/step02', [OrderController::class, 'step02'])->name('order.step02');
    Route::post('/store02', [OrderController::class, 'store02'])->name('order.store02');
    Route::get('/step03', [OrderController::class, 'step03'])->name('order.step03');
    Route::post('/store03', [OrderController::class, 'store03'])->name('order.store03');
    Route::get('/step04', [OrderController::class, 'step04'])->name('order.step04');
});

// 商品管理
Route::resource('/products', ProductController::class);
// 留言板
Route::resource('/forum', ForumController::class);
// 會員系統

require __DIR__ . '/auth.php';
