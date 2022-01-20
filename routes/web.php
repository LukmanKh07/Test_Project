<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['web'])->group(function () {
    Route::resource('/users', 'UserController');
    Route::resource('/customer', 'CustomerController');
    Route::resource('/products', 'ProductController');
    Route::resource('/agent', 'AgentController');
    Route::resource('/order', 'OrderController');
});
Route::get('customer/fetch_data', 'CustomerController@fetch_data');
Route::post('/costumer/create', [App\Http\Controllers\CostumerController::class, 'store']);
Route::put('/costumer/{costumer}', [App\Http\Controllers\CostumerController::class, 'update']);
Route::delete('/costumer/{costumer}', [App\Http\Controllers\CostumerController::class, 'destroy']);
