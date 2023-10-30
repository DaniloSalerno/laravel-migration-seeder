<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function trains()
    {
        $trains = Train::all();
        return view('pages.trains', compact('trains'));
    }
}
