<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminReportController;

Route::get('/', [HomeController::class, 'index']);

Route::get(
    '/admin/dashboard',
    [AdminController::class, 'dashboard']
)->middleware('admin');

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/harga', [HargaController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/cart', [CartController::class,'index']);

Route::get('/order-status',[OrderStatusController::class,'index']);

Route::post('/cart/add/{id}', [CartController::class,'add']);

Route::get('/cart/remove/{id}', [CartController::class,'remove']);

Route::get('/admin/menu', [AdminMenuController::class,'index']);

Route::get('/admin/menu/create', [AdminMenuController::class,'create']);

Route::post('/admin/menu/store', [AdminMenuController::class,'store']);

Route::get('/admin/menu/edit/{id}', [AdminMenuController::class,'edit']);

Route::post('/admin/menu/update/{id}', [AdminMenuController::class,'update']);

Route::get('/admin/menu/delete/{id}', [AdminMenuController::class,'destroy']);

Route::get('/checkout', [CheckoutController::class,'index']);

Route::post('/checkout/store', [CheckoutController::class,'store']);

Route::get('/admin/orders', [AdminOrderController::class,'index']);

Route::get('/admin/orders/show/{id}', [AdminOrderController::class,'show']);

Route::get('/admin/orders/process/{id}', [AdminOrderController::class,'process']);

Route::get('/admin/orders/finish/{id}', [AdminOrderController::class,'finish']);

Route::get('/admin/login', [AuthController::class,'login']);

Route::post('/admin/login', [AuthController::class,'authenticate']);

Route::get('/admin/logout', [AuthController::class,'logout']);

Route::get('/admin/reports', [AdminReportController::class,'index']);

Route::post('/checkout/qris', [CheckoutController::class,'qris']);

Route::get('/admin/orders/verify/{id}', [AdminOrderController::class,'verify']);



