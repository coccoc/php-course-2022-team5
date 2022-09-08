<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //get all movies from movies table
    public function getAll() {
        $movie = Movie::all();
        return response($movie);
    }

    //get movie by id from movies table
    public function getById($id) {
        $movie = Movie::findOrFail($id);
        return response()->json($movie);
    }

    //create a new movie in movie table
    public function create(Request $request) {
        $movie = new Movie;

        $movie -> title = $request->title;
        $movie -> country = $request->country;
        $movie -> producer = $request->producer;
        $movie -> actors = $request->actors;
        $movie -> description = $request->description;
        $movie -> save();

        return response()->json($movie);
    }

    //update a movie in movie table
    public function update(Request $request, $id) {
        $movie = Movie::findOrFail($id);

        $movie -> title = $request->title;
        $movie -> country = $request->country;
        $movie -> producer = $request->producer;
        $movie -> actors = $request->actors;
        $movie -> description = $request->description;
        $movie -> save();

        return response()->json($movie);
    }

    //delete a movie in movie table
    public function delete($id) {
        $movie = Movie::findOrFail($id);
        $movie -> delete();
    }
}
