<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {

        return view('home');
    }
    public function trains()
    {
        $trains = Train::orderByDesc('id')->get();
        //dd($trains);
        return view('treni', compact('trains'));
    }
}
