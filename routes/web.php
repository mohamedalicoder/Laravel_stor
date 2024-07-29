<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\Colorcontroller;
use App\Http\Controllers\menu;
use App\Http\Controllers\home;
use App\Http\Controllers\news;
use App\Http\Controllers\full_menu;

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\milkshake;
use App\Http\Controllers\pancake;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('shop', [Homecontroller::class, 'index']);
Route::get('add_to_cart', [Homecontroller::class, 'add_to_cart']);
Route::get('show_cart', [Homecontroller::class, 'show_cart']);
});

require __DIR__.'/auth.php';




Route::get('/product', [ProductController::class, 'index'])->middleware('Checkage');
Route::get('/add_product', [ProductController::class, 'create']);
Route::post('/save_product', [ProductController::class, 'store']);
Route::get('/product_edit/{id}', [ProductController::class, 'edit']);
Route::post('/update_product/{id}', [ProductController::class, 'update']);
Route::get('/product_delete/{id}', [ProductController::class, 'destroy']);


Route::get('category', [CategoryController::class, 'index']);
Route::get('category_create', [CategoryController::class, 'create']);
Route::post('category_store', [CategoryController::class, 'store']);
Route::get('catgory_delete/{id}', [CategoryController::class, 'destroy']);
Route::get('catgory_edit/{id}', [CategoryController::class, 'edit']);
Route::post('category_update/{id}', [CategoryController::class, 'update']);

Route::get('color', [Colorcontroller::class, 'index']);
Route::get('color_create', [Colorcontroller::class, 'create']);
Route::post('color_store', [Colorcontroller::class, 'store']);
Route::get('color_delete/{id}', [Colorcontroller::class, 'destroy']);
Route::get('color_edit/{id}', [Colorcontroller::class, 'edit']);
Route::post('color_update/{id}', [Colorcontroller::class, 'update']);
Route::get('auth_error', function(){
    return view('auth_error');
});


Route::get('/menu', [menu::class, 'index']);
Route::get('/home', [home::class, 'index']);
Route::get('/home', [home::class, 'index']);
Route::get('/full_menu', [full_menu::class, 'index']);
Route::get('/news', [news::class, 'index']);
Route::get('/milkshake', [milkshake::class, 'index']);
Route::get('/pancake', [pancake::class, 'index']);





