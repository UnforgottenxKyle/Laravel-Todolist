<?php

use App\Http\Controllers\TodoController;
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
    return view('todo');
});
Route::post('/add/todo', [TodoController::class, 'store']);
Route::get('/', [TodoController::class, 'index']);
Route::delete('/delete/{todo}', [TodoController::class, 'destroy']);
Route::post('/edit/{todo}', [TodoController::class, 'edit']);
Route::put('/update/{todo}', [TodoController::class, 'update']);
