<?php
//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Project

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'getAll'])->middleware('authorization:1,2');
    Route::get('/{id}', [ProductController::class, 'getById'])->middleware('authorization:1,2');
    Route::post('/', [ProductController::class, 'create'])->middleware('authorization:1');
    Route::patch('/{id}', [ProductController::class, 'update'])->middleware('authorization:1');
    Route::delete('/{id}', [ProductController::class, 'delete'])->middleware('authorization:1');
});