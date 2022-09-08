<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MoviePlay;
use \DateTime;

class MoviePlayController extends Controller
{
    //get movie session between 2 dates from movie_plays table 
    public function getMovieSession(Request $request, $id) {
        $play_start = $request->start;
        $play_end = $request->end;

        $movie_play = MoviePlay::where([
            ['movie_id', $id],
            ['play_date', '>', $play_start], 
            ['play_date', '<', $play_end]
        ])->get();

        return response()->json($movie_play);
    }
}
