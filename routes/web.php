<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HoneController;
use App\Http\Controllers\LoginController;
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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',[LoginController::class,'login'])->name('login.page');
Route::post('login',[LoginController::class,'checkUser'])->name('login');
Route::get('/home',[HoneController::class, 'gotoHomePage'])->name('home');
Route::get('/about',[AboutController::class,'gotoAboutPage'])->name('about');
Route::get('/todo',[TodoController::class,'gotoTodoIndex'])->name('todo.index');
Route::get('/todo/add',[TodoController::class,'gotoTodoAddView'])->name('todo.add');
Route::post('/todo/store',[TodoController::class,'addNewPost'])->name('todo.store');
Route::get('/todo/update/{todo}',[TodoController::class,'gotoTodoUpdate'])->name('todo.update');
Route::get('/todo/delete',[TodoController::class,'gotoTodoDelete'])->name('todo.delete');
Route::patch('/todo/updates/{todo}',[TodoController::class,'todoUpdate'])->name('todo.updates');
Route::put('/todo/delete/{todo}',[TodoController::class,'todoDelete'])->name('todo.delete');
