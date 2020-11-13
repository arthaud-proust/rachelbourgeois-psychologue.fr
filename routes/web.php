<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/add-section', [AdminController::class, 'createSection'])->name('createSection');
    Route::post('/add-section', [AdminController::class, 'storeSection'])->name('storeSection');
    Route::get('/edit-section/{sectionId}', [AdminController::class, 'editSection'])->name('editSection');
    Route::put('/edit-section/{sectionId}', [AdminController::class, 'updateSection'])->name('updateSection');
    Route::delete('/edit-section/{sectionId}', [AdminController::class, 'destroySection'])->name('destroySection');

    Route::post('/update-orders', [AdminController::class, 'updateOrders'])->name('updateOrdersSections');

});