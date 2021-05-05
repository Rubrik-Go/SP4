<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GaleryComponent extends Component
{
    public function render()
    {
        return view('livewire.galery-component')->layout("layouts.sp4");
    }
}
