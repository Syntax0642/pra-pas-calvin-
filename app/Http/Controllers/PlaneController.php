<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\Plane;

class PlaneController extends Controller
{
    public function indexs(){
        return view('planes/all',[
            'title' => 'planes',
            'planes' => Plane::all()
        ]);
    }

    public function shows($planes)
    {
        $planesmodels = Plane::find($planes);

        if (!$planesmodels) {
            return abort(404);
        }

        return view('planes.detail', [
            "title" => "DetailPlanes",
            "planes" => $planesmodels,
        ]);
    }

    public function destroyss ($planes)
    {
        try {
            $planesmodels = Plane::findOrFail($planes);
            $planesmodels->delete();
            return redirect()->route('planes.indexs')->with('success', 'Barang berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('planes.indexs')->with('error', 'Gagal menghapus barang. Silakan coba lagi.');
        }
    }
}
