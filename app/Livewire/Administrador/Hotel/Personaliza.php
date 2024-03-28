<?php

namespace App\Livewire\Administrador\Hotel;

use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Personaliza extends Component
{

    public $saved = false;

    public $name;
    public $slogan;
    public $final_slogan;


    public function render()
    {
        $hotels = Hotel::all();
        return view('livewire.administrador.hotel.personaliza', ['hotels' => $hotels]);
    }



    public function mount()
    {
        $user = Auth::user();
        $hotel = $user->hotel;
        if ($hotel) {
            $this->name = $hotel->name;
            $this->slogan = $hotel->slogan;
            $this->final_slogan = $hotel->final_slogan;
        } else {
            // Manejar el caso donde el usuario no tiene un hotel asociado
        }
    }
    public function updatePersonaliza()
    {
        $hotels = Hotel::all();
        foreach ($hotels as $hotel) {
            $hotel->update([
                'name' => $this->name,
                'slogan' => $this->slogan,
                'final_slogan' => $this->final_slogan,
            ]);
        }

        $this->saved = true;

        session()->flash('message', 'Hotels updated successfully.');
    }


}
