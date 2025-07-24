<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TarifarioImport;
use App\Imports\TarifarioSheetImport;
use App\Models\Pais;
use App\Models\Tarifario;
use DB; 

class CalculaTarifario extends Component
{

    public $paisOrigen;
    public $paisDestino;
    public $tarifario;
    public $origen;
    public $destino;
    public $cantidad20 = 0;
    public $cantidad40 = 0;


    public function render()
    {
        $this->paisOrigen = Pais::where('activo', true)->where('esOrigen', true)->get();
        $this->paisDestino = Pais::where('activo', true)->where('esOrigen', false)->get();

        return view('livewire.form-calcula');
    }

    public function clickCalcula()
    {
        $origen = $this->paisOrigen->where('id', $this->origen)->first();
        $destino = $this->paisDestino->where('id', $this->destino)->first();
        // // if (!$destino instanceof Pais) {
        // //     dd('Verifique origen o destino');
        // // }

        // // if (!$origen instanceof Pais) {
        // //     dd('Verifique origen o destino');
        // // }


        $this->tarifario = Tarifario::select(DB::raw("SUM(tarifario.flete20) * $this->cantidad20 as flete20, 
                                                      SUM(tarifario.flete40st) * $this->cantidad40 AS flete40st, 
                                                      tarifario.pol AS origen, 
                                                      tarifario.pod AS destino,
                                                      SUM(agentesgasto.gastodestino) AS gastosdest,
                                                      agentes.nombre AS agente,
                                                      agentes.id AS agenteId"))
                            ->join('agentes', 'tarifario.agente', '=', 'agentes.id')
                            ->join('agentesgasto', 'tarifario.agente', '=', 'agentesgasto.agente')
                            ->where('agentesgasto.activo', '=', true)
                            ->where('tarifario.pod', $destino->nombre)
                            ->where('tarifario.pol', $origen->nombre)
                            ->where('tarifario.flete20', '<>', null)
                            ->where('tarifario.flete40st', '<>', null)
                            ->groupBy('tarifario.pol', 'tarifario.pod','agentes.nombre', 'agentes.id')
                            ->orderBy('tarifario.flete20','asc')
                            ->orderBy('tarifario.flete40st', 'asc')
                            // ->toSql();
                            ->get();
        $this->dispatch('index', tarifario: $this->tarifario );

        // dd($this->tarifario );
    }
}
