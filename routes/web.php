<?php

use App\Http\Controllers\CustomRegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterHotelController;
use App\Livewire\Administrador\HomeAdminComponent;
use App\Livewire\Administrador\Hotel\HotelComponent;
use App\Livewire\Administrador\Hotel\RegistrarHotelComponent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () { return view('welcome');});

Route::get('/', [HomeController::class, 'create'])->name('home');

// Ruta para procesar la solicitud de registro de administradores
Route::middleware(['limpiar-cache', 'guest', 'user-existe'])->group(function () {
    Route::get('/register', [CustomRegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [CustomRegisteredUserController::class, 'store']);
});




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/registrar-hotel', RegistrarHotelComponent::class)->middleware('checkHotelRegistration')->name('registrar-hotel');

    // Route::get('/inicio', [HomeAdminController::class, 'create'])->name('inicio');
    Route::get('/inicio-administrador', HomeAdminComponent::class)->name('inicio-administrador');
    Route::get('/hotel', HotelComponent::class)->name('hotel');

    Route::get('/hotel-no-registrado', function () {
        return view('hotel-no-registrado');
    })->middleware('hotel-registrado')->name('hotel-no-registrado');
});
