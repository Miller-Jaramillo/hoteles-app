<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create()
    {

        $hotels = Hotel::all();
        return view('dashboard',compact('hotels'));
    }
}
