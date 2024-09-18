<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    use HasFactory;
    protected $table = 'suscripciones'; //Te falto poner esto
    protected $fillable = ['nombre', 'email', 'tipo', 'informacion_adicional'];
}
