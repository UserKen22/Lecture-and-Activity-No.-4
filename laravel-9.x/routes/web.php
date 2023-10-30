<?php
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use Resources\views;
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
    return view('login');
});

Route::get('/app', function () {
    return view('app');
});


// routes/web.php
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::get('/registration', 'App\Http\Controllers\RegistrationController@index')->name('registration');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
Route::get('/app', 'App\Http\Controllers\AppController@index')->name('app');