<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;


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
    return view('Front.home');
});

Route::get('client/login', [AuthController::class,'login'])->name('client.login');
Route::get('client/register', [AuthController::class,'register'])->name('client.register');




Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/appointment', [MainController::class, 'appointment'])->name('appointment');


          
Route::get('/service', [MainController::class, 'service'])->name('service');
Route::get('/sorry', [MainController::class, 'sorry'])->name('sorry');











