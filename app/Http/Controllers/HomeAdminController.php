<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function create()
    {

        $hotels = Hotel::all();
        return view('home-admin',compact('hotels'));
    }
}
