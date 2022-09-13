<?php

namespace App\Http\Controllers;

use Database\Factories\TicketFactory;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;

/*
    Admin Create, Read, Update, Delete ticket prices different by seats.
    All halls and movies have the same prices for seats
*/
class TicketController extends Controller
{
    public function index()
    {
        TicketFactory::factory()->count(500)->create();
    }
    //READ
    public function getAll(){
        $ticket = Ticket::all();
        return response()->json($ticket);
    }
//
    //CREATE SINGLE TICKET
     public function create(Request $request)
     {
         $ticket = new Ticket;
         $ticket->hall_id = $request->hall_id;
         $ticket->seat_label = $request->seat_label;
         $ticket->status = false;
         $ticket->row = $request->row;
         $ticket->price = $request->price;
         $ticket->save();
         return response()->json($ticket);
     }

    //UPDATE SINGLE TICKET
    public function update(Request $request, $id){
        $ticket = Ticket::findOrFail($id);
        $ticket->movie_play_id = $request->movie_play_id;
        $ticket->hall_id= $request->hall_id;
        $ticket->seat_label = $request->seat_label;
        $ticket->status = $request->status;
        $ticket->row = $request->row;
        $ticket->price = $request->price;
        $ticket->save();
        return response()->json($ticket);
    }

    //BULK UPDATE TICKETS BY ROW
    public function updateBulk(Request $request, $row){
        Ticket::where('row', $row)->update(['price' => $request->price]);
        return response()->json("updated price of ". $row. " row");
    }

    public function delete($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
    }
}
