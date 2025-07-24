<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TarifarioImport;
use App\Imports\TarifarioSheetImport;
use App\Models\Agente;

class LoadExcel extends Component
{
    use WithFileUploads;

    public $fileXls;
    public $agente = 0;
    public $agentes;
    public function render()
    {   
        $this->agentes = Agente::all();
        return view('livewire.load-excel');
    }

    public function clickImport()
    {
        $import = new TarifarioSheetImport($this->agente);
        // $import->onlySheets('Worksheet 1', 'Worksheet 3');

        Excel::import($import, $this->fileXls);

        // $collect = Excel::toArray(new TarifarioSheetImport, $this->fileXls);
        // dd($collect);
        // foreach ($collect as $fila) { 
        //         dd($fila); // Mostrar el contenido de la celda

        //     foreach ($fila as $celda) { // Recorrer cada celda dentro de la fila
        //         dd($celda); // Mostrar el contenido de la celda
        //     }
        // }
        // dd($this->fileXls, $collect);
    }
}
