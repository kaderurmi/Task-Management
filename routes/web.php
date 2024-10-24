<?php

use App\Http\Controllers\TasksController;
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

Route::get('/', function () {
    return view('welcome');
});
// route::get('/dosomething', [TasksController::class, 'doSomething']);
// Route::get('/tasks', [TasksController::class, 'index']);
// // Route::get('/tasks/{id}', [TasksController::class, 'show']);
// Route::get('/tasks/{task}', [TasksController::class, 'show']);

Route::resource('/tasks', TasksController::class); 