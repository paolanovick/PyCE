<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaAsesoria extends Model
{
    use HasFactory;
    // Los campos que se pueden llenar masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio_mensual'

    ];
}
