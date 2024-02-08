<?php

use Illuminate\Support\Facades\Route;
//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Auth
Route::group(['prefix' => 'auth'], function () {
    require(__DIR__ . '/auth.php');
});

//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Authenticated
Route::group(['middleware' => 'auth'], function () {
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Category
    require(__DIR__ . '/category.php');
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Product
    require(__DIR__ . '/product.php');
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Cart
    require(__DIR__ . '/cart.php');
});