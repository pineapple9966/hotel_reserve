<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
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

Route::prefix('admin')->group(function () {

    Route::get('hotels', [Admin\HotelController::class, 'index'])->name('admin.hotels.index');
    Route::get('hotels/create', [Admin\HotelController::class, 'create'])->name('admin.hotels.create');
    Route::post('hotels', [Admin\HotelController::class, 'store'])->name('admin.hotels.store');
    Route::get('hotels/{hotel}', [Admin\HotelController::class, 'show'])->name('admin.hotels.show');
    Route::get('hotels/{hotel}/edit', [Admin\HotelController::class, 'edit'])->name('admin.hotels.edit');
    Route::put('hotels/{hotel}', [Admin\HotelController::class, 'update'])->name('admin.hotels.update');
    Route::delete('hotels/{hotel}', [Admin\HotelController::class, 'destroy'])->name('admin.hotels.destroy');
});

    Route::get('', [HomeController::class, 'index'])->name('home');