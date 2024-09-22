<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    use HasFactory;

    // Los campos que se pueden llenar masivamente
    protected $fillable = [
        'titulo',
        'resumen',
        'contenido',
        'imagen',
        'email', 
    ];

    // Si necesitas configurar los timestamps, puedes habilitarlos o deshabilitarlos aquí
    public $timestamps = true;
}
