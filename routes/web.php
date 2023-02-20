<?php

use Illuminate\Support\Facades\Route;
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
\*/

Route::get('user-create', [UserController::class, "index"]);
Route::post('users-store', [UserController::class, "store"])->name('createUser');
Route::get('/', [UserController::class, "display"])->name('usersList');
