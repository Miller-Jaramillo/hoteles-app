<?php

namespace App\Livewire\Administrador\Hotel;

use App\Models\Hotel;
use Livewire\Component;

class HotelComponent extends Component
{
    public function render()
    {
        $hotels = Hotel::all();
        return view('livewire.administrador.hotel.hotel-component', ['hotels' => $hotels]);
    }
}
