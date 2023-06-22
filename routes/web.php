<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LeagueController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HomeController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
 
Route::get('/', function () {
    return view('welcome');
})->name('main');

// Admin
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('dashboard')->middleware(['auth:sanctum','is_admin']);

// Admin Players
Route::get('admin/players/index', [PlayerController::class,'adminIndex'])->middleware(['auth:sanctum','is_admin'])->name('admin.players.index');
Route::get('admin/player/create', [PlayerController::class,'adminCreate'])->middleware(['auth:sanctum','is_admin'])->name('admin.player.create');
Route::post('admin/player/store', [PlayerController::class,'adminStore'])->middleware(['auth:sanctum','is_admin'])->name('admin.player.store');
Route::get('admin/player/details/{slug}', [PlayerController::class,'adminDetails'])->middleware(['auth:sanctum','is_admin'])->name('admin.player.details');
Route::get('admin/player/edit/{slug}', [PlayerController::class,'adminEdit'])->middleware(['auth:sanctum','is_admin'])->name('admin.player.edit');
Route::put('admin/player/update/{slug}', [PlayerController::class,'adminUpdate'])->middleware(['auth:sanctum','is_admin'])->name('admin.player.update');

// Player
Route::get('players/index', [PlayerController::class,'index'])->name('players.index');
Route::get('player/details/{slug}', [PlayerController::class,'details'])->name('player.details');

// Managers
Route::get('managers/index', [PlayerController::class,'index'])->name('managers.index');
Route::get('manager/details/{slug}', [PlayerController::class,'details'])->name('manager.details');

// Admin Managers
Route::get('admin/managers/index', [ManagerController::class,'adminIndex'])->middleware(['auth:sanctum','is_admin'])->name('admin.managers.index');
Route::get('admin/manager/create', [ManagerController::class,'adminCreate'])->middleware(['auth:sanctum','is_admin'])->name('admin.manager.create');
Route::post('admin/manager/store', [ManagerController::class,'adminStore'])->middleware(['auth:sanctum','is_admin'])->name('admin.manager.store');
Route::get('admin/manager/details/{slug}', [ManagerController::class,'adminDetails'])->middleware(['auth:sanctum','is_admin'])->name('admin.manager.details');
Route::get('admin/manager/edit/{slug}', [ManagerController::class,'adminEdit'])->middleware(['auth:sanctum','is_admin'])->name('admin.manager.edit');
Route::put('admin/manager/update/{slug}', [ManagerController::class,'adminUpdate'])->middleware(['auth:sanctum','is_admin'])->name('admin.manager.update');

// Teams
Route::get('teams/index', [TeamController::class,'index'])->name('teams.index');
Route::get('team/details/{slug}', [TeamController::class,'details'])->name('team.details');

// Admin Teams
Route::get('admin/teams/index', [TeamController::class,'adminIndex'])->middleware(['auth:sanctum','is_admin'])->name('admin.teams.index');
Route::get('admin/team/create', [TeamController::class,'adminCreate'])->middleware(['auth:sanctum','is_admin'])->name('admin.team.create');
Route::post('admin/team/store', [TeamController::class,'adminStore'])->middleware(['auth:sanctum','is_admin'])->name('admin.team.store');
Route::get('admin/team/details/{slug}', [TeamController::class,'adminDetails'])->middleware(['auth:sanctum','is_admin'])->name('admin.team.details');
Route::get('admin/team/edit/{slug}', [TeamController::class,'adminEdit'])->middleware(['auth:sanctum','is_admin'])->name('admin.team.edit');
Route::put('admin/team/update/{slug}', [TeamController::class,'adminUpdate'])->middleware(['auth:sanctum','is_admin'])->name('admin.team.update');

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
