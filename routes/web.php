<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('landing', App\Http\Livewire\Pages\Landing::class);
Route::get('sign-in', App\Http\Livewire\Components\Molecules\InputFields\SignIn::class);
Route::get('sign-up', App\Http\Livewire\Components\Molecules\InputFields\SignUp::class);
Route::get('forgot-password', App\Http\Livewire\Components\Molecules\InputFields\ForgotPassword::class);
Route::view('/users', 'livewire.pages.users');
Route::view('/dashboard', 'livewire.pages.dashboard');
Route::view('/patient', 'livewire.pages.patient');
Route::view('/inventory', 'livewire.pages.inventory');
Route::view('/orders', 'livewire.pages.orders');
Route::view('/appointments', 'livewire.pages.appointments');
Route::view('/schedules', 'livewire.pages.schedules');
