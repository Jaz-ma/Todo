<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController ;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
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
// Task Routes

Route::get('/tasks/{user:username}',[TaskController::class,'index'])->name('tasks.index')->middleware('auth');
Route::post('/tasks/store',[TaskController::class,'store'])->name('tasks.store')->middleware('auth');
Route::delete('tasks/delete/{task}',[TaskController::class,'destroy'])->name('tasks.destroy')->middleware('auth');

//Register

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register');

//Logout

Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

//Login

Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login');

//Task Lists

Route::get('/lists/{user:username}',[ListController::class,'index'])->name('lists.index')->middleware('auth');
Route::post('/lists/store}',[ListController::class,'store'])->name('list.store')->middleware('auth');
Route::delete('/lists/delete/{list:listName}',[ListController::class,'destroy'])->name('list.destroy')->middleware('auth');

Route::get('phpinfo', fn () => phpinfo());
