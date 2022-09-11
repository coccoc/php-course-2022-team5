<?php

namespace App\Http\Controllers;

use Database\Factories\TicketFactory;
use Illuminate\Http\Request;
use App\Models\Ticket;

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
    //CREATE
     public function create(Request $request){
         $ticket = new Ticket;
         $ticket->hall_id= $request->hall_id;
         $ticket->seat_label = $request->seat_label;
         $ticket->status = $request->status;
         $ticket->type = $request->type;
         $ticket->price = $request->price;
         $ticket->save();
         return response()->json($ticket);
     }

    //UPDATE
    public function update(Request $request, $id){
        $ticket = Ticket::findOrFail($id);

        $ticket->hall_id= $request->hall_id;
        $ticket->seat_label = $request->seat_label;
        $ticket->status = $request->status;
        $ticket->type = $request->type;
        $ticket->price = $request->price;
        $ticket->save();
        return response()->json($ticket);
    }
    public function delete($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
    }
}
