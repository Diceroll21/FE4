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

Route::any('exercise-1', 'Exercise1');
Route::any('DignadiceEx2', 'Exercise2');
Route::any('DignadiceEx3', 'Exercise3@index');
Route::any('exercise-3/store', 'Exercise3@store');
Route::any('Dignadice_final', 'ExerciseFinal@login');
Route::any('Dignadice_final/store', 'ExerciseFinal@store');
