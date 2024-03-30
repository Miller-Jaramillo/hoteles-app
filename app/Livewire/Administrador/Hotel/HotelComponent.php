<?php

namespace App\Livewire\Administrador\Hotel;

use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HotelComponent extends Component
{

    public function mount()
    {
        if (DB::table('hotels')->count() === 0) {
            return redirect()->route('hotel-no-registrado');
        }
    }

    public function render()
    {


        $hotels = Hotel::all();
        return view('livewire.administrador.hotel.hotel-component', ['hotels' => $hotels]);
    }
}
