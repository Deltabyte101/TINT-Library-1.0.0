<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Prophecy\Exception\Doubler\ReturnByReferenceException;

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
    return view('index');
});

Route::resource('login', LoginController::class);

/*Route::get('dashboard', function () {
    return view('dashboard') ;
})->middleware('IsAdmin');*/

//เฉพาะแอดมินเข้าถึงได้
Route::middleware(['HasLogin','IsAdmin'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard') ;
    })->name('dashboard');
});

//เฉพาะสมาชิก

//เฉพาะผู้เยียมชม

Route::resource('register', RegisterController::class);

Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('login.index');
})->name("logout");
