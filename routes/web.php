<?php

use App\Http\Controllers\ForTshirtShopController;
use App\Models\forTshirtShop;
use Illuminate\Support\Facades\Route;


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

Route::get('/',[ForTshirtShopController::class,'index']);
Route::post('/save-data',[ForTshirtShopController::class,'saveList'])->name('saveList');
Route::get('delete/{id}',[ForTshirtShopController::class,'delete']);
Route::get('edit/{id}',[ForTshirtShopController::class,'edit']);
Route::post('/edit',[ForTshirtShopController::class,'updateData'])->name('updateData');
