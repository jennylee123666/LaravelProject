<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RetalController;

Route::get('/computers', [ProductsController::class, 'index'])->name('computers');

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/users/recharge/{id}', [UserController::class, 'edit'])->name('recharge');

Route::get('/users/show_update/{id}', [UserController::class, 'show_update'])->name('show_update');

Route::get('/users/update/{id}', [UserController::class, 'update'])->name('update');

Route::get('/users/recharing/{id}', [UserController::class, 'recharging'])->name('recharging');

Route::get('/users/manage_user', [UserController::class, 'manage_user'])->name('manage_user');

Route::get('/users/manager_dashboard', [UserController::class, 'dashboard'])->name('manager_dashboard');

Route::get('/computers/create', [ProductsController::class, 'create']);

Route::get('/search', [ProductsController::class, 'search'])->name('search');

Route::post('/computers/store', [ProductsController::class, 'store']);

Route::get('/computers/edit/{id} ', [ProductsController::class, 'edit']);

Route::post('/computers/update ', [ProductsController::class, 'update']);

Route::get('/computers/delete/{id} ', [ProductsController::class, 'delete']);


Route::get('/main', [MainPageController::class, 'index']) ->name('main');
// Route::get('/', [MainPageController::class, 'index']) ->name('main');

Route::get('/', [UserController::class, 'index']) -> name('account_detail');

Route::get('/about', [RetalController::class, 'index']) ->name('retals');

Route::get('/retal/show_update/{id}', [RetalController::class, 'show_update']) ->name('retal_show_update');

Route::get('/retal/edit/{order_id}', [RetalController::class, 'edit']) ->name('retal_edit');

Route::get('/retal/bond/{order_id}', [RetalController::class, 'bond']) ->name('bond');

Route::get('/rent', [RetalController::class, 'list'])->name('list');

Route::get('/rent/rentalpage/{id}', [RetalController::class, 'rentalpage']); 

Route::get('search/rent/rentalpage', [RetalController::class, 'rentalpage'])->name('rentalpage'); 

Route::get('search/rent/rentalpage/{id}', [RetalController::class, 'rentalpage']); 

Route::get('/search/computer', [App\Http\Controllers\RetalController::class, 'search'])->name('search_computer');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']) ->name('home');






Route::get('/users/countusers', [UserController::class, 'countusers'])->name('countusers');

Route::get('/users/show_blacklist/{id}', [UserController::class, 'show_blacklist'])->name('show_blacklist');

Route::get('/users/blacklist_update/{id}', [UserController::class, 'blacklist_update']) ->name('blacklist_update');

Route::get('/users/show_staff/{id}', [UserController::class, 'show_staff'])->name('show_staff');

Route::get('/users/staff_update/{id}', [UserController::class, 'staff_update']) ->name('staff_update');


Route::get('/users/delete/{id}', [UserController::class, 'delete']) ->name('delete_user');

Route::get('/users/blackuser', [UserController::class, 'blackuser'])->name('blackuser');


// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::get('register', [AuthController::class, 'register_view'])->name('register');





// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::get('register', [AuthController::class, 'register_view'])->name('register');



