<?php

namespace App\Livewire\Administrador;

use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeAdminComponent extends Component
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
        return view('livewire.administrador.home-admin-component', ['hotels' => $hotels]);
    }
}
