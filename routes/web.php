<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('user/{user}', [UserController::class,'show']);
Route::get('users', [UserController::class,'index']);

Route::get('business', [BusinessController::class, 'index'])->name('business.index');
Route::post('business/store',[BusinessController::class, 'store'])->name('business.store');



