<?php

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubController;

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

Route::get('login', [AuthController::class, 'login']) -> name('login');

Route::get('register', [AuthController::class, 'register']) -> name('register');

Route::post('post_Registration', [AuthController::class, 'postRegistration']) -> name('registerPost');

Route::post('post_login', [AuthController::class, 'postLogin']) -> name('loginPost');

Route::get('homePage', [AuthController::class, 'homePage']) -> name('homePage');

Route::post('addSubject', [SubController::class, 'addSubject']) ->name('addSubject');

Route::get('homePage', [SubController::class, 'homepage']);









