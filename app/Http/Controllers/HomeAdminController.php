<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeAdminController extends Controller
{
    public function create()
    {
        if (DB::table('hotels')->count() === 0) {
            return view('hotel-no-registrado');
        }


        $hotels = Hotel::all();
        return view('home-admin',compact('hotels'));
    }
}
