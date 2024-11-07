<?php

namespace App\Http\Controllers;

use App\Models\CategoryTicket;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $events = Event::doesntHave('tickets')->get();
        $types = CategoryTicket::all();
        return view('Ticket/index', compact('events'));
    }

    public function storeTicket(Request $request)
    {
        $data =  $request->validate([
            'event_id' => 'required|exists:events,id',
            'unitPriceSimple' => 'nullable|numeric|min:0',
            'unitPriceVip' => 'nullable|numeric|min:0',
            'unitPriceVipPrestige' => 'nullable|numeric|min:0',

            'quantitySimple' => 'nullable|integer|min:0',
            'quantityVip' => 'nullable|integer|min:0',
            'quantityVipPrestige' => 'nullable|integer|min:0',

        ]);
        if ($request->input("action") === "valider") {
            if ($data['unitPriceSimple'] !== null && $data['quantitySimple'] !== null) {
                $ticket  = new Ticket();
                $ticket->event_id = $data['event_id'];
                $ticket->category_ticket_id = 3;
                $ticket->unitPrice = $data["unitPriceSimple"];
                $ticket->quantity = $data["quantitySimple"];
                $ticket->save();
            }

            if ($data['unitPriceVip'] !== null && $data['quantityVip'] !== null) {
                $ticket  = new Ticket();
                $ticket->event_id = $data['event_id'];
                $ticket->category_ticket_id = 1;
                $ticket->unitPrice = $data["unitPriceVip"];
                $ticket->quantity = $data["quantityVip"];
                $ticket->save();
            }

            if ($data['unitPriceVipPrestige'] !== null && $data['quantityVipPrestige'] !== null) {
                $ticket  = new Ticket();
                $ticket->event_id = $data['event_id'];
                $ticket->category_ticket_id = 2;
                $ticket->unitPrice = $data["unitPriceVipPrestige"];
                $ticket->quantity = $data["quantityVipPrestige"];
                $ticket->save();
            }
        } elseif ($request->input('action') === "publier") {
            if ($data['unitPriceSimple'] !== null && $data['quantitySimple'] !== null) {
                $ticket  = new Ticket();
                $ticket->event_id = $data['event_id'];
                $ticket->category_ticket_id = 3;
                $ticket->unitPrice = $data["unitPriceSimple"];
                $ticket->quantity = $data["quantitySimple"];
                $ticket->save();
            }

            if ($data['unitPriceVip'] !== null && $data['quantityVip'] !== null) {
                $ticket  = new Ticket();
                $ticket->event_id = $data['event_id'];
                $ticket->category_ticket_id = 1;
                $ticket->unitPrice = $data["unitPriceVip"];
                $ticket->quantity = $data["quantityVip"];
                $ticket->save();
            }

            if ($data['unitPriceVipPrestige'] !== null && $data['quantityVipPrestige'] !== null) {
                $ticket  = new Ticket();
                $ticket->event_id = $data['event_id'];
                $ticket->category_ticket_id = 2;
                $ticket->unitPrice = $data["unitPriceVipPrestige"];
                $ticket->quantity = $data["quantityVipPrestige"];
                $ticket->save();
            }
            Event::where('id', $data['event_id'])->update([
                'status' => 'A venir',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        return redirect('/');
    }
}
