<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\MoviePlay;
use Exception;

class MoviePlayController extends Controller
{
    public function getAll(Request $request) {
        $resp = [];
        try {
            $resp = MoviePlay::all();
        } catch (Exception $e) {
            logs($e);
        } finally {
            return response()->json($resp);
        }
    }

    //get movie session between 2 dates from movie_plays table
    public function get(Request $request) {
        $play_start = $request->start;
        $play_end = $request->end;
        $id = $request->id;

        $movie_play = MoviePlay::where([
            ['movie_id', $id],
            ['play_date', '>', $play_start],
            ['play_date', '<', $play_end]
        ])->get();

        return response()->json($movie_play);
    }

    public function createMovieSession(Request $request) {
        $resp = [];
        try {
            $moviePlays = $request->moviePlays;

            foreach ($moviePlays as $moviePlay) {
                $inst = MoviePlay::query()->newModelInstance($moviePlay);
                if ($inst->save()) {
                    $resp[] = $inst;
                }
            }
        } catch (Exception $e) {
            logs($e);
        } finally {
            return response()->json($resp);
        }
    }

    public function updateMovieSession(Request $request) {
        $resp = 0;
        try {
            /* E.g.:
             *  { "movie_id":3, "hall_id": 2 }
             * */
            $id = $request->id;
            $body = $request->json()->all();
            if (MoviePlay::query()->find($id)->update($body)) {
                $resp++;
            }
        } catch (Exception $e) {
            logs($e);
        } finally {
            return response()->json($resp);
        }
    }

    public function deleteMovieSession(Request $request) {
        $resp = 0;
        try {
            $resp = MoviePlay::query()->find($request->id)->delete();
        } catch (Exception $e) {
            logs($e);
        } finally {
            return response()->json($resp);
        }
    }
}
