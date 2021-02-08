<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CharactersController;

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

Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request->user();
});

Route::get('characters', [CharactersController::class, 'index']);
Route::get('characters/{characterId}', [CharactersController::class, 'showCharacter']);
Route::get('characters/{characterId}/comics', [CharactersController::class, 'showCharacterComics']);
Route::get('characters/{characterId}/events', [CharactersController::class, 'showCharacterEvents']);
Route::get('characters/{characterId}/series', [CharactersController::class, 'showCharacterSeries']);
Route::get('characters/{characterId}/stories', [CharactersController::class, 'showCharacterStories']);