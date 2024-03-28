<?php

namespace App\Livewire\Administrador\Hotel;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class Presentacion extends Component
{
    use WithFileUploads;

    public $files = [];
    public $previews = [];
    public $message;
    public function render()
    {
        return view('livewire.administrador.hotel.presentacion');
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

}
