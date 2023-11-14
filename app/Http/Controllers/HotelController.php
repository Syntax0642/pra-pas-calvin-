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

    public function show($id)
    {
        $hotels = Hotel::findOrFail($id);  // Assuming your model is named Hotel
        return view('showHotel', compact('hotels'));
    }
}


