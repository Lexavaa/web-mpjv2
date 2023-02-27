<?php

use App\Http\Controllers\CrewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\UpDataUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/join-us', [UpDataUserController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/validate-login', [LoginController::class, 'authanticate']);

Route::group(['prefix' => 'upload'], function () {
    Route::post('/user', [UpDataUserController::class, 'upload']);
    Route::post('/regional', [RegionalController::class,'upload'])->middleware(['isAdmin']);
    Route::post('/crew', [CrewController::class,'upload'])->middleware('isAnggota');
    
});

Route::group(['prefix' => 'update'], function () {
    Route::patch('/user/{id_user}/{id_profile}', [UpDataUserController::class, 'update']);
    Route::patch('/ferivied/{id}', [NotifyController::class, 'ferivied'])->middleware('isAdmin');
    Route::patch('/regional/{id}', [RegionalController::class,'update'])->middleware(['isAdmin']);
    Route::patch('/crew/{id}', [CrewController::class,'update'])->middleware('isAnggota');
});

Route::group(['prefix' => 'delete'], function () {
    // Route::delete('/user/', [UpDataUserController::class, 'upload']);
    Route::delete('/regional/{id}', [RegionalController::class,'delete'])->middleware(['isAdmin']);
    Route::patch('/crew/{id}', [CrewController::class,'delete'])->middleware('isAnggota');
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['isActive', 'isAuth']], function () {
    Route::post('/logout', [DashboardController::class, 'logout']);
    Route::get('/first-page', [DashboardController::class, 'index']);
    Route::get('/notify', [NotifyController::class, 'index'])->middleware(['isAdmin']);
    Route::get('/regional', [RegionalController::class,'index'])->middleware(['isAdmin']);
    Route::get('/crew', [CrewController::class,'index'])->middleware('isAnggota');
});
