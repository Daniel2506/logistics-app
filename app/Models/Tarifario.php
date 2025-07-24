<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarifario extends Model
{
    use HasFactory;

    protected $table = 'tarifario';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'pod',
        'pol',
        'naviera',
        'via',
        'flete20',
        'frecuencia',
        'flete40st',
        'flete40hc',
        'documentacion',
        'tch',
        'bas',
        'isps',
        'otros',
        'diaslibresdestino',
        'tt',
        'etd1',
        'etd2',
        'etd3',
        'activo',
        'agente'
    ];
}
