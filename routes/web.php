<?php

use App\Http\Livewire\DokumenComponent;
use App\Http\Livewire\GaleryComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LkComponent;
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

// Route::get('/', function () {
//     return view('layouts.sp4');
// });

Route::get('/',HomeComponent::class);

Route::get('/laporan-kinerja', LkComponent::class);

Route::get('/galeri', GaleryComponent::class);

Route::get('/dokumen', DokumenComponent::class);
