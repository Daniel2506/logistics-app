<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AgenteGasto extends Model
{
    use HasFactory;

    protected $table = 'agentesgasto';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['nombre', 'descripcion','gastodestino'];

    public function agent()
    {
        return $this->hasOne(Agente::class, 'id', 'agente');

    }
}
