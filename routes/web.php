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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'create'])->name('home');

// Ruta para procesar la solicitud de registro de administradores
Route::get('/register', [CustomRegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [CustomRegisteredUserController::class, 'store']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {


    // if(DB::table('hotels')->count() <1){
    //     Route::get('/register-hotel', RegistrarHotelComponent::class)->name('register-hotel');
    // }


    // if (DB::table('hotels')->count() >= 1) {
    //     Route::get('/register-hotel', function () {
    //         return redirect()->route('inicio');
    //     })->name('register-hotel');
    // }




    // if (DB::table('hotels')->count() === 0) {
    //     Route::get('/inicio', function () {
    //         return view('hotel-no-registrado');
    //     })->name('inicio');

    //     Route::get('/homeAdmin', function () {
    //         return view('hotel-no-registrado');
    //     })->name('homeAdmin');

    //     Route::get('/hotel', function () {
    //         return view('hotel-no-registrado');
    //     })->name('hotel');
    // }





    // else {
    //     Route::get('/inicio', [HomeAdminController::class, 'create'])->name('inicio');
    //     Route::get('/homeAdmin', HomeAdminComponent::class)->name('homeAdmin');
    //     Route::get('/hotel', HotelComponent::class)->name('hotel');
    // }




});
