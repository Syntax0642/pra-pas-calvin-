<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function indexss(){
        return view('tickets/all',[
            'title' => 'Tickets',
            'tickets' => Ticket::all()
        ]);
    }

    public function showss($tickets)
    {
        $ticketsmodels = Ticket::find($tickets);

        if (!$ticketsmodels) {
            return abort(404);
        }

        return view('tickets.detail', [
            "title" => "DetailTicket",
            "tickets" => $ticketsmodels,
        ]);
    }


public function destroys($tickets)
{
    try {
        $ticketsmodels = Ticket::findOrFail($tickets);
        $ticketsmodels->delete();
        return redirect()->route('tickets.indexss')->with('success', 'Barang berhasil dihapus!');
    } catch (\Exception $e) {
        return redirect()->route('tickets.indexss')->with('error', 'Gagal menghapus barang. Silakan coba lagi.');
    }
}

}

