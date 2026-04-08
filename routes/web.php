<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Models\Product;
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

Route::get('/second', [TestController::class, 'show']);

Route::get('/home', [MainController::class, 'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');
Route::get('/shuffle', [MainController::class, 'shuffleArray'])->name('shuffle');
Route::get('/sort',    [MainController::class, 'sortArray'])->name('sort');
Route::get('/filter',  [MainController::class, 'filterArray'])->name('filter');

Route::get('/products',[ProductController::class, 'index'])
->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])
->name('products.create');
Route::post('/products', [ProductController::class, 'store'])
->name('products.store');

Route::get('/products/{product}', [ProductController::class, 'show'])
->name('products.show');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name ('products.destroy');