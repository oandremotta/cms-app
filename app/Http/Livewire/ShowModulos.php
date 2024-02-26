<?php

namespace App\Http\Livewire;

use App\Models\Modulo;
use Livewire\Component;

class ShowModulos extends Component
{
    public $modulos;

    public function mount()
    {
        $this->modulos = Modulo::whereNull('idPai')->with('filhos')->get();
    }

    public function render()
    {
        return view('livewire.show-modulos');
    }
}
