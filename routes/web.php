<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/urunler',[ProductController::class,'index']);

Route::get('/urunler/ekle',[ProductController::class,'create']);
Route::post('/urunler/ekle',[ProductController::class,'store']);

Route::get('/urunler/duzenle/{id}',[ProductController::class,'edit']);
Route::post('/urunler/duzenle/{id}',[ProductController::class,'update']);

Route::get('/urunler/sil/{id}',[ProductController::class,'destroy']);