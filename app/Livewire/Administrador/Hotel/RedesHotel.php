<?php

namespace App\Livewire\Administrador\Hotel;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RedesHotel extends Component
{
    public $saved = false;


    public $whatsapp;
    public $facebook;
    public $instagram;
    public $tiktok;


    public function render()
    {
        return view('livewire.administrador.hotel.redes-hotel');
    }


    public function mount()
    {
        $user = Auth::user();
        $this->whatsapp = $user->whatsapp;
        $this->facebook = $user->facebook;
        $this->instagram = $user->instagram;
        $this->tiktok = $user->tiktok;
    }

    public function updateRedes()
    {
        $user = Auth::user();
        $user->update([
            'whatsapp' => $this->whatsapp,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'tiktok' => $this->tiktok,

        ]);

        $this->saved = true;

    }
}
