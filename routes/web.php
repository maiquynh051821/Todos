<?php

use App\Http\Controllers\TodosController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [TodosController::class, 'index']);
Route::get('/todos/{todo}',[TodosController::class,'show']);
Route::get('/new-todos',[TodosController::class,'create']);
Route::post('/store-todos',[TodosController::class,'store']);
Route::get('todos/{todo}/edit',[TodosController::class,'edit']);
Route::post('/todos/{todo}/update-todos',[TodosController::class,'update']);
Route::get('/todos/{todo}/delete',[TodosController::class,'destroy']);
Route::get('/todos/{todo}/complete',[   TodosController::class,'complete']);
Route::get('/send-email',[TodosController::class,'sendmail']);
Route::post('/send-email', [TodosController::class, 'storemail']);