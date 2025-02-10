<?php

use App\Http\Controllers\Hotel\GetHotelsController;
use App\Http\Controllers\Rule\CheckRuleController;
use App\Http\Controllers\Rule\RuleController;
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

Route::get('/', GetHotelsController::class);
Route::get('/check-rules/{hotel}', CheckRuleController::class);

Route::resource('rules', RuleController::class);
