<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\ProductController;
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
Route::get('/login', [AuthController::class, "showFormLogin"])->name("login")->middleware('guest');
Route::post('/login', [AuthController::class, "login"]);
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [Controller::class, "index"])->name("dashboard");
    Route::get('/category/add', [CategorysController::class, "add"])->name("categoryAdd");
    Route::post('/category/store', [CategorysController::class, "store"])->name("categoryStore");
    Route::get('/product/add', [ProductController::class, "add"])->name("productAdd");
    Route::post('/product/store', [ProductController::class, "store"])->name("productStore");
});
