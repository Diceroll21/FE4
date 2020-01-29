<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::any('DignadiceEx1', 'Exercise1');
Route::any('DignadiceEx2', 'Exercise2');
Route::any('DignadiceEx3', 'Exercise3@index');
Route::any('Dignadice/store', 'Exercise3@store');
Route::any('FE4_final', 'ExerciseFinal@login');
Route::any('FE4_final/store', 'ExerciseFinal@store');
