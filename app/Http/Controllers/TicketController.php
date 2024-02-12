<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\tikerorang;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function indexss()
    {
        return view('tickets/all', [
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

    public function edit(Ticket $tickets)
    {
        $ticketorg = tikerorang::all();

        return view('tickets.edit', [
            'title' => "Edit",
            'tickets' => $tickets,
            'ticketorg' => $ticketorg,
        ]);
    }

    public function update(Request $request, Ticket $tickets)
    {
        $validatedData = $request->validate([
            'nama_pesanan' => 'required',
            'nama_pemesan' => 'required',
            'berangkat_dari' => 'required',
            'destinasi' => 'required',
            'tipe_pesanan' => 'required',
            'nama_kendaraan' => 'required',
            'kode_pesanan' => 'required',
            'tiket_orang' => 'required',
            'harga' => 'required',
            'jam_berangkat' => 'required',
            'tanggal_pemesanan' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_tiket_hangus' => 'required',
        ]);

        $result = Ticket::where('id',$tickets->id)->update($validatedData);


        if ($result) {
            return redirect('/tickets/all')->with('success', 'Data student berhasil diubah');

        }else {
            return redirect()->back()->with('error', 'Gagal mengubah data ticket. Silakan coba lagi.');
        }

    }

    public function create()
    {
        return view('tickets.add', [
            'title' => 'Add Student Data',
            'ticketorg' => tikerorang::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pesanan' => 'required',
            'nama_pemesan' => 'required',
            'berangkat_dari' => 'required',
            'destinasi' => 'required',
            'tipe_pesanan' => 'required',
            'nama_kendaraan' => 'required',
            'kode_pesanan' => 'required',
            'tiket_orang' => 'required',
            'harga' => 'required',
            'jam_berangkat' => 'required',
            'tanggal_pemesanan' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_tiket_hangus' => 'required',
        ]);

        $result = Ticket::create($validated);

        if($result){
            return redirect('/tickets/all')->with('success', 'Data student berhasil ditambahkan');

        }
    }

}

