<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectionController;

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
Route::get('polling-unit', [ElectionController::class, 'pollingUnits'])->name('polling-unit');
Route::get('polling-unit-results/{uniqueid}', [ElectionController::class, 'pollingUnitsResults'])->name('polling-unit-results');
Route::get('lga', [ElectionController::class, 'lga'])->name('lga');
Route::get('lga-results/{lgaid}', [ElectionController::class, 'lgaResult'])->name('lga-results');
Route::get('add-poll-result', [ElectionController::class, 'addPollResult'])->name('add-poll-result');
Route::post('store', [ElectionController::class, 'store'])->name('store');
