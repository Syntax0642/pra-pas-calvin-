<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
   public function index(){
        return view('orders/all',[
            'title' => 'orders',
            'hotels' => Hotel::all()
        ]);
   }

    public function show($hotels)
    {
        $hotelsmodels = Hotel::find($hotels);

        if (!$hotelsmodels) {
            return abort(404);
        }

        return view('orders.detail', [
            "title" => "DetailHotel",
            "hotels" => $hotelsmodels,
        ]);
    }




public function destroy($hotels)
{
    try {
        $hotelsmodels = Hotel::findOrFail($hotels);
        $hotelsmodels->delete();
        return redirect()->route('orders.index')->with('success', 'Barang berhasil dihapus!');
    } catch (\Exception $e) {
        return redirect()->route('orders.index')->with('error', 'Gagal menghapus barang. Silakan coba lagi.');
    }
}

}
