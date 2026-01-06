<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\FeedbackController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/user/{name}',[PageController::class,'user']);
Route::get('/product',[PageController::class,'products']);
Route::get('productDetails/{name}',[PageController::class,'productDeatils']);

Route::resource('products',ProductController::class);
Route::prefix('admin')->group(function(){
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/reports', [AdminController::class,'reports'])->name('admin.reports');
});

Route::get('/connect/index',[ConnectController::class,'create'])->name('connect.create');
Route::post('/connect',[ConnectController::class,'store'])->name('connect.store');
Route::get('/connect/result', [ConnectController::class, 'result'])->name('connect.result');
Route::resource('feedback',FeedbackController::class);