<?php

use Illuminate\Http\Request;
use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/rents',[RentController::class, 'index'])->name('rents.index');
Route::post('/rents/insert',[RentController::class, 'store'])->name('rents.store');
Route::put('/rents/{id}',[RentController::class, 'update'])->name('rents.update');
