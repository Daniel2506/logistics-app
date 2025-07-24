<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agente extends Model
{
    use HasFactory;

    protected $table = 'agentes';

        /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['nombre'];
}
