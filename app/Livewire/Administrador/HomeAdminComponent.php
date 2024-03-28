<?php

namespace App\Livewire\Administrador;

use App\Models\Hotel;
use Livewire\Component;

class HomeAdminComponent extends Component
{
    public function render()
    {

        $hotels = Hotel::all();
        return view('livewire.administrador.home-admin-component', ['hotels' => $hotels]);
    }
}
