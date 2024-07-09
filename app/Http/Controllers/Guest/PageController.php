<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $trains = Train::whereDate('landing_hour', '=', $today)->get();

        return view('welcome', compact('trains'));
    }
}
