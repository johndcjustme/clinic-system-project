<?php

namespace App\Http\Livewire\Components\Molecules\InputFields;

use Livewire\Component;

class SignIn extends Component
{
    public function render()
    {
        return view('livewire.components.molecules.input-fields.sign-in')
            ->extends('livewire.pages.authenticate')
            ->section('content');
    }
}
