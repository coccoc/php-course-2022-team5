<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;
class HallController extends Controller
{
    //
    public function getAll(Request $request) {
        $hall = Hall::all();
        return response($hall);
    }

    public function getById(Request $request, $id) {
        $hall = Hall::findOrFail($id);
        return response()->json($hall);
    }

    public function create(Request $request) {
        $hall = new Hall;
        $hall -> capacity = $request -> capacity;
        $hall -> rows = $request -> rows;

        $hall -> save();

        return response()-> json($hall);
    }

    public function update(Request $request, $id) {
        $hall = Hall:: findOrFail($id);

        $hall -> capacity = $request -> capacity;
        $hall -> rows = $request -> rows;

        $hall -> save();
    }

    public function delete(Request $request, $id) {
        $hall = Hall::findOrFaill($id);

        $hall ->delete();
    }

}
