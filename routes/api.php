<?php

use App\Http\Controllers\ProductMasterListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'product-master-list', 'as' => 'product-master-list.'], function () {
    Route::get('/', [ProductMasterListController::class, 'index'])->name('index');
    Route::post('/upload', [ProductMasterListController::class, 'upload'])->name('upload');
});
