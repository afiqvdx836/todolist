<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('todolist')->middleware(['auth'])->group(function(){
    Route::get('/view', [TodoController::class, 'View'])->name('all.todolist');
    Route::get('/add', [TodoController::class, 'create'])->name('add.list');
    Route::post('/store', [TodoController::class, 'store'])->name('store.list');
    
});


require __DIR__.'/auth.php';
