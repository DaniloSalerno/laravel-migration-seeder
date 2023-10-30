<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        //volevo trovare un modo per ordinarli in ordine crescente di orario a partire dall'orario attuale
        $departing_trains = Train::orderBy('start_time')->limit(4)->get();
        return view('index', compact('departing_trains'));
    }

    public function trains()
    {
        $trains = Train::orderByDesc('id')->paginate(12);
        return view('pages.trains', compact('trains'));
    }
}
