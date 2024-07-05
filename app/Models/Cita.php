<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'pacientes',
        'hora',
        'fecha',
        'servicio',
        'Descripcion',
    ];
}
