<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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


Route::get('/', [taskController::class, 'index'])->name('index');
Route::post('/', [taskController::class, 'store'])->name('store');
Route::delete('/{task:id}', [taskController::class, 'destroy'])->name('destroy');

