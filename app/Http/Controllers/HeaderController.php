<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('components.header', compact('hotels'));
    }
}
