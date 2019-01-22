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

   //\App\Invoice::create(1); // создал счет
   //\App\Invoice::replenish(1, 5000); // поплнил счет
    //App\Invoice::pay(1, 2000); //  списал со счета
    //\App\Tarif::userPay(1, 1); // купил тариф
    //$node = new \App\BinaryTree(50, 19);
    $test = new \App\BinaryTree(19, 3);
    $test->go();
});
