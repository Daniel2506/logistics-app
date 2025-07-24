<?php

namespace App\Imports;

use App\Models\Tarifario;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithLimit;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use DB;

class TarifarioImport implements ToModel, WithStartRow, WithLimit, WithCalculatedFormulas
//ToModel, WithStartRow, WithLimit
{
    private $origen;
    private $agente;

    public function __construct($origen, $agente)
    {
        // Tarifario::all()
        //     ->update(['activo' => false]);
        Tarifario::where('activo', '=', true)->where('agente', '=', $agente)
            ->update([
                'activo' => false
            ])
        ;
        $this->origen = $origen;
        $this->agente = $agente;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        return new Tarifario([
            'pol' => $row[0],
            'pod' => $this->origen,
            'naviera' => $row[2],
            'via' => $row[3],
            'frecuencia' => $row[4],
            'flete20' => $row[5],
            'flete40st' => $row[6],
            'flete40hc' => $row[7],
            'documentacion' => $row[8],
            'tch' => $row[9],
            'bas' => $row[10],
            'isps' => $row[11],
            'otros' => $row[12],
            'diaslibresdestino' => $row[13],
            'tt' => $row[14],
            'etd1' => $row[15],
            'etd2' => $row[16],
            'etd3' => $row[17],
            'agente' => $this->agente
        ]);
    }

    public function collection(Collection $collection)
    {
        // Process data from the first sheet
        foreach ($collection as $row) {
            dd($row);
        }
    }

    public function startRow(): int
    {
        return 10;
    }
    public function limit(): int
    {
        return 10;
    }
}
