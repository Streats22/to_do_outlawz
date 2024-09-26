<?php

use App\Http\Controllers\TodoController;
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

//Route::get('/', function () {
//    return view('to-do');
//});
Route::get('/' , [TodoController::class, 'index'])->name('todo.index');
Route::post('/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/clear', [TodoController::class, 'clear'])->name('todo.clear');
