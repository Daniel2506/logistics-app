<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TarifarioImport;
use App\Imports\TarifarioSheetImport;
use App\Models\Tarifario;
use DB;
class IndexTarifario extends Component
{
    public $tarifario;

    public function mount()
    {
        $this->tarifario = [];
    }
    public function render()
    {
        return view('livewire.index-tarifario');
    }

    #[On('index')]
    public function index($tarifario)
    {
        // dd($tarifario);
        $this->tarifario = $tarifario;
    }

    public function getFechasCargue($agente)
    {
        return Tarifario::select(DB::raw('DISTINCT(created_at) as fecha'))->where('agente', '=', $agente)->where('activo','=', true)->first();
    }
}
