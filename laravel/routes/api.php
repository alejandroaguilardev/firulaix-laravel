<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\HistoryVersionController;
use App\Http\Controllers\NewspaperController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WarController;
use App\Http\Controllers\RequestRegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('/emails', EmailsController::class);
Route::resource('/history-versions', HistoryVersionController::class);
Route::resource('/newspaper', NewspaperController::class);
Route::resource('/news', NewsController::class);
Route::resource('/war', WarController::class);
Route::resource('/request-register', RequestRegisterController::class);
