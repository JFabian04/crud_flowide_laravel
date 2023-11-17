<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// View Index
Route::get('/', [UserController::class, 'index'])->name('index');

// Register
Route::post('/store-user', [UserController::class, 'store'])->name('storeUser');

// Update
Route::post('/update-user/{id}', [UserController::class, 'update'])->name('updateUser');

// Delete
Route::delete('/delete-user/{id}', [UserController::class, 'delete'])->name('deleteUser');

// Reports Generate - List User
Route::get('/report-list', [UserController::class, 'listUsers'])->name('report-list');

// Report Unique USer
Route::get('/report-user/{id}', [UserController::class, 'userReport'])->name('reportUser');
