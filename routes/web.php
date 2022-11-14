<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DashboardController;

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


Auth::routes([
    'verify'=> true
]);

Route::controller(HomeController::class)->group(function (){
    Route::get('/','index')->name('home.index');
    Route::get('/home','home')->name('home.home');
    
});

Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/users','users')->name('dashboard.users');
    Route::get('/users/edit/{id}','editPage')->name('users.editPage');
    Route::get('/profile','profile')->name('dashboard.profile');
    Route::POST('/update-profile','updateProfile')->name('updateProfile');
    Route::POST('/searchByEmail','userByEmail')->name('userByEmail');
});



