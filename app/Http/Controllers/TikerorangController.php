<?php

namespace App\Http\Controllers;
use App\Models\tikerorang;
use Illuminate\Http\Request;

class TikerorangController extends Controller
{
    public function indextiket()
    {
        return view('tiketorang/all', [
            'title' => 'TicketOrang',
            'tickets' => tikerorang::all()
        ]);
    }

    public function create()
    {
        return view('tiketorang.add', [
            'title' => 'Add tiket Data',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tiketperorang' => 'required',
        ]);

        $result = tikerorang::create($validated);

        if($result){
            return redirect('/tiketorang/all')->with('success', 'Data ticket berhasil ditambahkan');

        }
    }

    public function destroy($ticketorg)
    {
        try {
            $ticketsmodelss = tikerorang::findOrFail($ticketorg);
            $ticketsmodelss->delete();
            return redirect()->route('ticketss.indextiket')->with('success', 'Barang berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('ticketss.indextiket')->with('error', 'Gagal menghapus tiket. Silakan coba lagi.');
        }
    }

    public function edit($id)
    {
        $ticketorg = tikerorang::findOrFail($id);
        return view('tiketorang.edit', [
            "title" => "Edit Ticket",
            "tiketorang" => $ticketorg,
        ]);
    }

    public function update(Request $request, tikerorang $tickets)
    {
        $validatedData = $request->validate([
            'tiketperorang' => 'required',
        ]);

        $result = tikerorang::where('id',$tickets->id)->update($validatedData);


        if ($result) {
            return redirect('/tiketorang/all')->with('success', 'Data tiket berhasil diubah');

        }else {
            return redirect()->back()->with('error', 'Gagal mengubah data ticket. Silakan coba lagi.');
        }

    }



}
