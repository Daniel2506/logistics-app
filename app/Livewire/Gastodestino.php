<?php

namespace App\Livewire;

use App\Models\AgenteGasto;
use Livewire\Component;

class Gastodestino extends Component
{
    public $agentesDestino;
    public function render()
    {
        $this->agentesDestino = AgenteGasto::query()->where('activo', '=', true)->get();
        return view('livewire.gastodestino');
    }
}
