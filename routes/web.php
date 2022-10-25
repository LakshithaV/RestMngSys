<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TableBookController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\UserController;

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

Route::resources([
    'book_tables' => TableBookController::class,
    'menu_items' => MenuItemController::class,
    
]);