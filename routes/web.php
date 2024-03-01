<?php

use App\Http\Controllers\tugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [tugasController::class,'home']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [tugasController::class, 'productfoodbeverage']);
    Route::get('/beauty-health', [tugasController::class, 'productbeautyhealth']);
    Route::get('/home-care', [tugasController::class, 'homecare']);
    Route::get('/baby-kid', [tugasController::class, 'productbabykid']);
    });

Route::get('/user/{id}/name/{name}', [tugasController::class,'user']);

Route::get('/penjualan', [tugasController::class,'penjualan']);