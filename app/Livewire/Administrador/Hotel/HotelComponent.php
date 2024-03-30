<?php

namespace App\Livewire\Administrador\Hotel;

use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HotelComponent extends Component
{
    public function render()
    {

        if (DB::table('hotels')->count() === 0) {
            return view('hotel-no-registrado');
        }

        $hotels = Hotel::all();
        return view('livewire.administrador.hotel.hotel-component', ['hotels' => $hotels]);
    }
}
