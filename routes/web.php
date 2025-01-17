<?php

use Illuminate\Support\Facades\Route;

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
    return view('client.index');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/admin/product-list', function () {
    return view('admin.product-list');
});
Route::get('/admin/add-product', function () {
    return view('admin.add-product');
});
