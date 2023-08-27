<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\AnalysisController;

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

Route::get('/', function () {
    return view('home');
});

Route::resource('/integration', IntegrationController::class);
Route::get('/integration', [IntegrationController::class, 'index'])->name('integration.index');

Route::resource('/analysis', AnalysisController::class);
Route::get('/analysis', [AnalysisController::class, 'index'])->name('analysis.index');

