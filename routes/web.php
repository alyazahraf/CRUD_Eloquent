<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


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

// CREATE DATA
Route::get('add', function () {
    return view('products.add');
})->name('products.create');
Route::post('products/store', [ProductsController::class, 'store'])->name('products.store');

// READ DATA
Route::get('/', [ProductsController::class, 'index'])->name('products.index');

// UPDATE DATA
Route::get('edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('products/update/{id}', [ProductsController::class, 'update'])->name('products.update');

// DELETE DATA
Route::delete('delete/{id}', [ProductsController::class, 'delete'])->name('products.delete');
