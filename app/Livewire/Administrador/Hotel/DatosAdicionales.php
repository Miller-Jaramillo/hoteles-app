<?php

namespace App\Livewire\Administrador\Hotel;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DatosAdicionales extends Component
{

    public $saved = false;

    public $phone;
    public $extension;
    public $whatsapp;
    public $facebook;
    public $instagram;
    public $tiktok;
    public $description;
    public $cover_photo;
    public $slogan;
    public $final_slogan;
    public $status;
    public $address;
    public $department;
    public $city;

    public function render()
    {
        return view('livewire.administrador.hotel.datos-adicionales');
    }

    public function mount()
    {
        $user = Auth::user();
        $this->phone = $user->phone;
        $this->extension = $user->extension;
        $this->department = $user->department;
        $this->city = $user->city;
    }

    public function updateUser()
    {
        $user = Auth::user();
        $user->update([
            'phone' => $this->phone,
            'extension' => $this->extension,
            'department' => $this->department,
            'city' => $this->city,

        ]);

        $this->saved = true;

        session()->flash('message', 'User updated successfully.');
    }


}
