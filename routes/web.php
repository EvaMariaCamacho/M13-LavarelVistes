<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientesController;

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
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//auth route for both 
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// for admin
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
});


// for clientes
Route::group(['middleware' => ['auth', 'role:cliente']], function () {
    Route::get('/dashboard/myprofile', [DashboardController::class, 'myprofile'])->name('dashboard.myprofile');
});

// for blogwriters
Route::group(['middleware' => ['auth', 'role:blogwriter']], function () {
    Route::get('/dashboard/postcreate', [DashboardController::class, 'postcreate'])->name('dashboard.postcreate');
});

require __DIR__ . '/auth.php';

//rotue de cliente

//Route::get('cliente/index', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
//Route::get('cliente/{id}', [App\Http\Controllers\ClienteController::class, 'show'])->name('cliente.show');
//Route::get('cliente/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('cliente.create');
//Route::post('cliente/create', [App\Http\Controllers\ClienteController::class, 'store'])->name('cliente.store');
//Route::get('cliente/{id}/edit', [App\Http\Controllers\ClienteController::class, 'edit'])->name('cliente.edit');
//Route::put('cliente/{id}/edit', [App\Http\Controllers\ClienteController::class, 'update'])->name('cliente.update');
//Route::delete('cliente/{id}/destroy', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::resource('cliente', App\Http\Controllers\ClienteController::class);

//rotue de bookings

//Route::get('booking/index', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
//Route::get('booking/{id}', [App\Http\Controllers\BookingController::class, 'show'])->name('booking.show');
//Route::get('booking/create', [App\Http\Controllers\BookingController::class, 'create'])->name('booking.create');
//Route::post('booking/create', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');
//Route::get('booking/{id}/edit', [App\Http\Controllers\BookingController::class, 'edit'])->name('booking.edit');
//Route::put('booking/{id}/edit', [App\Http\Controllers\BookingController::class, 'update'])->name('booking.update');
//Route::delete('booking/{id}/destroy', [App\Http\Controllers\BookingController::class, 'destroy'])->name('booking.destroy');

Route::resource('booking', App\Http\Controllers\BookingController::class);