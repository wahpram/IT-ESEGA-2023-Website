<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MoleTeamController;
use App\Http\Controllers\ValoTeamController;

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
    return view('layouts.landing', [
        "title" => 'Dashboard'
    ]);
});

Route::get('/mole-page', [MoleTeamController::class, 'index']);
Route::post('/mole-regis', [MoleTeamController::class, 'create_team']);
Route::post('/mole-player-regis/{id?}', [MoleTeamController::class, 'create_player']);
Route::get('/list-team-mole', [MoleTeamController::class, 'list']);

Route::get('/valo-page', [ValoTeamController::class, 'index']);
Route::post('valo-regis', [ValoTeamController::class, 'create_team']);
Route::post('/valo-player-regis/{id?}', [ValoTeamController::class, 'create_player']);
Route::get('/list-team-valo', [ValoTeamController::class, 'list']);

// Route::get('/mole-team', function() {
//     return view('mole.team');
// });

// Route::get('/mole-player', function(){
//     return view('mole.player');
// });

// Route::get('/daftar-team-mole', function() {
//     return view('layouts.daftar-team');
// });

// Route::get('/daftar-team-valo', function() {
//     return view('layouts.daftar-team');
// });