<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
 
Route::get('/', function () {
    return view('welcome');
})->name('main');

// Player
Route::get('players/index', [PlayerController::class,'index'])->name('players.index');
Route::get('player/details/{slug}', [PlayerController::class,'details'])->name('player.details');

// Player
Route::get('managers/index', [PlayerController::class,'index'])->name('managers.index');
Route::get('manager/details/{slug}', [PlayerController::class,'details'])->name('manager.details');

// Teams
Route::get('teams/index', [TeamController::class,'index'])->name('teams.index');
Route::get('team/details/{slug}', [TeamController::class,'details'])->name('team.details');

// Stadium
Route::get('stadium/index', [StadiumController::class,'index'])->name('stadium.index');
Route::get('stadium/details/{slug}', [StadiumController::class,'details'])->name('stadium.details');

// Leagues
Route::get('league/index', [LeagueController::class,'index'])->name('leagues.index');
Route::get('league/details/{slug}', [LeagueController::class,'details'])->name('league.details');


Route::get('index', [LocalizationController::class,'index']);
Route::get('change/lang', [LocalizationController::class,'lang_change'])->name('LangChange');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
