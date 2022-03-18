<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/dash",[App\Http\Controllers\HomeController::class, 'dash'])->name('dash');
Route::get("/p/create",[App\Http\Controllers\HomeController::class,'create']) ->name('create');
Route::post('/p', [App\Http\Controllers\HomeController::class,'store'])->name('store');


Route::group(['middleware' => ['auth','admin']], function (){

    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'home'])->name('home');
    //users route
    Route::get('/users',[App\Http\Controllers\Admin\DashboardController::class, 'users'])->name('users');
    //Edit users route
    Route::get('/useredit/{id}',[App\Http\Controllers\Admin\DashboardController::class, 'useredit'])->name('useredit');
    //Update users post
    Route::put('/user_role_update/{id}',[App\Http\Controllers\Admin\DashboardController::class,'user_role_update'])->name('user_role_update');
     //Asign issue
    Route::post("/p/assign/",[App\Http\Controllers\Admin\DashboardController::class, 'assign'])-> name("assign");
});

