<?php



use App\Http\Controllers\GameController;
use App\Models\Game;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('game-list',[GameController::class,'index']);
Route::get('add-game',[GameController::class,'addgame']);
Route::post('save-game',[GameController::class,'savegame']);
Route::get('edit-game/{id}',[GameController::class,'editGame']);
Route::post('update-game',[GameController::class,'updategame']);
Route::get('delete-game/{id}',[GameController::class,'destroy']);