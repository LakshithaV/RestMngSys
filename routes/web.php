<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TableBookController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TableController;

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
    return view('homepage.homepage');
});

Route::get('/emplogin', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/showBookTable', [TableBookController::class, 'showBookTable'])->name('showBookTable');
Route::get('/showAllBookTable', [TableBookController::class, 'showAllBookTable'])->name('showAllBookTable');
Route::get('/Confirm/{id}', [TableBookController::class, 'Confirm']);
Route::get('/Cancelled/{id}', [TableBookController::class, 'Cancelled']);
Route::get('/Done/{id}', [TableBookController::class, 'Done']);

Route::get('/showOrders', [OrderController::class, 'showOrders'])->name('showOrders');
Route::get('/cancel/{id}', [OrderController::class, 'cancel'])->name('cancel');
Route::get('/done/{id}', [OrderController::class, 'done'])->name('done');

Route::get('/Available/{id}', [TableController::class, 'Available'])->name('Available');
Route::get('/Occupied/{id}', [TableController::class, 'Occupied'])->name('Occupied');

Route::get('/showProfile', [UserController::class, 'showProfile']);
Route::get('/resetPwd', [UserController::class, 'resetPwd']);
Route::post('/resetPwdDB', [UserController::class, 'resetPwdDB']);

Route::resources([
    'book_tables' => TableBookController::class,
    'menu_items' => MenuItemController::class,
    'users' => UserController::class,
    'orders' => OrderController::class,
    'transactions' => TransactionController::class,
    'tables' => TableController::class,
    
]);