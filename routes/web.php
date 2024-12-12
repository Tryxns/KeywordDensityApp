<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;


Route::post('/tool/calculate-and-get-density', [ToolController::class, 'CalculateAndGetDensity']);
Route::get('/tool', [ToolController::class, 'index'])->name('KDTool');
Route::get('/', function () {
    return view('welcome');
});
