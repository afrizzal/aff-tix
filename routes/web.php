<?php

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
Route::get('/dashboard/movies', 'Dashboard\MovieController@index')->name('dashboard.movies');
Route::get('/dashboard/theaters', 'Dashboard\TheaterController@index')->name('dashboard.theaters');
Route::get('/dashboard/tickets', 'Dashboard\TicketController@index')->name('dashboard.tickets');

//Users
Route::get('/dashboard/users', 'Dashboard\UserController@index')->name('dashboard.users');
Route::get('/dashboard/users/edit/{id}', 'Dashboard\UserController@edit')->name('dashboard.users.edit');
Route::put('/dashboard/users/{id}', 'Dashboard\UserController@update')->name('dashboard.users.update');
Route::delete('/dashboard/users/{id}', 'Dashboard\UserController@destroy')->name('dashboard.users.delete');
});
