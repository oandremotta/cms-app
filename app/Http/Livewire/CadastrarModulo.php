<?php

namespace App\Http\Livewire;

use App\Models\AppFuncionalidade;
use Livewire\Component;

class CadastrarModulo extends Component
{
    public $pageTitle;

    public $selectedFuncionalidade;

    public $nome;

    public $appFuncionalidades;

    public $tipo;

    public $tipos = ['Funcionalidade'];

    public $status = false;

    public function mount()
    {
        $this->pageTitle = 'Cadastrar Módulo';
        $this->appFuncionalidades = AppFuncionalidade::all();
    }

    public function cancelar()
    {
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.cadastrar-modulo');
    }
}
