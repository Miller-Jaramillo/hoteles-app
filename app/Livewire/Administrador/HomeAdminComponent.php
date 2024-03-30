<?php

namespace App\Livewire\Administrador;

use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeAdminComponent extends Component
{
    public function render()
    {
        if (DB::table('hotels')->count() === 0) {
            return view('hotel-no-registrado');
        }


        $hotels = Hotel::all();
        return view('livewire.administrador.home-admin-component', ['hotels' => $hotels]);
    }
}
