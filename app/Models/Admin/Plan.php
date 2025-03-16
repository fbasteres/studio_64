<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'planes';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'moneda',
        'duracion_dias',
        'activo',
        'caracteristicas'
    ];

    protected $casts = [
        'precio' => 'float',
        'activo' => 'boolean',
        'duracion_dias' => 'integer',
        'caracteristicas' => 'array', 
    ];
}
