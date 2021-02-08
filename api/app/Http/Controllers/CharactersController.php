<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Characters;
use App\Models\Comics;
use App\Models\Events;
use App\Models\Series;
use App\Models\Stories;

class CharactersController extends Controller
{
    public function index() {
        return Characters::all();
    }

    public function showCharacter($character_id) {
        return Characters::find($character_id);
    }

    public function showCharacterComics($character_id) {
        return Comics::where('character', $character_id)->get();
    }

    public function showCharacterEvents($character_id) {
        return Events::where('character', $character_id)->get();
    }

    public function showCharacterSeries($character_id) {
        return Series::where('character', $character_id)->get();
    }

    public function showCharacterStories($character_id) {
        return Stories::where('character', $character_id)->get();
    }
}
