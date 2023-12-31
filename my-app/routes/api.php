<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/powezka/313030/people', [PeopleController::class, 'index']);
Route::post('/powezka/313030/people', [PeopleController::class, 'store']);
Route::get('/powezka/313030/people/{people}', [PeopleController::class, 'show']);
Route::put('/powezka/313030/people/{people}', [PeopleController::class, 'update']);
Route::delete('/powezka/313030/people/{people}', [PeopleController::class,'destroy']);
