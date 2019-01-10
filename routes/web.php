<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //\App\Invoice::replenish(1, 5000);
    //\App\Invoice::pay(1, 2000);
    //\App\Invoice::pay(1, 2000);
   \App\Invoice::pay(1, 2000);
});
