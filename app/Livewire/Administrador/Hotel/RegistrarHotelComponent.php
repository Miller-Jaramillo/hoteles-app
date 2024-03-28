<?php

namespace App\Livewire\Administrador\Hotel;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class RegistrarHotelComponent extends Component
{
    use WithFileUploads;
    public $files = [];
    public $previews = [];

    public $name_hotel;
    public $slogan;
    public $final_slogan;

    public function render()
    {
        return view('livewire.administrador.hotel.registrar-hotel-component');
    }

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'image|max:2048', // Adjust image validation rules as needed
        ]);

        $this->previews = [];
        foreach ($this->files as $file) {
            $this->previews[] = [
                'url' => $file->temporaryUrl(),
                'type' => Str::startsWith($file->getMimeType(), 'video') ? 'video' : 'image',
            ];
        }
    }


    public function submitForm()
    {
        $this->validate([
            'name_hotel' => 'required',
            'slogan' => 'required',
            'final_slogan' => 'required',
        ]);

        $hotel = new Hotel();
        $hotel->name = $this->name_hotel;
        $hotel->slogan = $this->slogan;
        $hotel->final_slogan = $this->final_slogan;
        $hotel->user_id = auth()->id();
        $path = $this->files[0]->store('perfil-hotel', 'public');
        $hotel->photo_profile = $path;

        $hotel->save();

        session()->flash('message', 'Hotel registrado correctamente.');

        return redirect()->route('inicio');
    }


}
