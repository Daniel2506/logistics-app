<?php

namespace App\Imports;

use App\Models\Tarifario;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class TarifarioSheetImport implements WithMultipleSheets
{
    public $agente; 
    public function __construct($agente)
    {
        $this->agente = $agente;
    }
    public function sheets(): array
    {
        return [
            'CARTAGENA' => new TarifarioImport('CARTAGENA', $this->agente),
            'COSTA RICA' => new TarifarioImport('COSTA RICA',$this->agente),
            'GUATEMALA' => new TarifarioImport('GUATEMALA',$this->agente),
            'ECUADOR' => new TarifarioImport('ECUADOR',$this->agente),
            'PERU' => new TarifarioImport('PERU',$this->agente),
            'DOMINICA ' => new TarifarioImport('DOMINICA ',$this->agente),
            'ARGENTINA' => new TarifarioImport('ARGENTINA',$this->agente),
            'URUGUAY' => new TarifarioImport('URUGUAY',$this->agente),
            'MIAMI' => new TarifarioImport('MIAMI',$this->agente),
        ];
    }
}
