<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'paises';

        /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['nombre'];
}
