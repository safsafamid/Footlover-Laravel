<?php

use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\LeagueController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\TeamController;
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

Route::apiResource("players", PlayerController::class);
Route::apiResource("teams", TeamController::class);
Route::get('teams/{team}/players', [TeamController::class,'getPlayers']);
Route::apiResource("leagues", LeagueController::class);
Route::get("leagues/{league}/teams", [LeagueController::class,'getTeams']);
Route::apiResource("countrys", CountryController::class);