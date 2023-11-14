<?php

namespace App\Http\Controllers;
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
}
