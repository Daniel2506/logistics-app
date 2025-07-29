<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TarifarioImport;
use App\Imports\TarifarioSheetImport;
use App\Models\Agente;
use Livewire\Attributes\Validate;

class LoadExcel extends Component
{
    use WithFileUploads;

    #[Validate('file|mimes:xlsx,xls|max:10240')]
    public $fileXls;
    
    public $agente = 0;
    public $agentes;
    public function render()
    {   
        $this->agentes = Agente::all();
        return view('livewire.load-excel');
    }
    public function updatedFileXls()
    {
        $this->validate([
            'fileXls' => 'required|file|mimes:xlsx,xls|max:10240',
        ]);
    }

    public function clickImport()
    {
        $import = new TarifarioSheetImport($this->agente);
        // $import->onlySheets('Worksheet 1', 'Worksheet 3');

        Excel::import($import, $this->fileXls);
    }
}
