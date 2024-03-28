<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $showForm;

    public function create()
    {

        //$rooms = Room::with('files')->get();
        $showForm = $this->showForm;
        return view('home',compact( 'showForm'));
    }

    public function openForm()
    {
        $this->showForm = true;
    }

    public function closeForm()
    {
        $this->showForm = false;
        $this->reset();
    }

}
