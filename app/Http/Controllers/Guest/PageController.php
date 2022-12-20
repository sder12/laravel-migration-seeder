<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $trains = Train::all();
        // dd($trains);
        return view('trains.index', compact('trains'));
    }

    public function showFew()
    {
        // $trains = Train::where('departure_day', '2022-12-19')->get();
        $trains = Train::where('departure_day', '>=', now())->get();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
