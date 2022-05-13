<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController ;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/tasks',[TaskController::class,'index'])->name('tasks.index');

//Register

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register');

//Logout

Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

//Login

Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('phpinfo', fn () => phpinfo());
