<?php

// app/Models/Club.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio_mensual'];

    // Puedes agregar otras configuraciones y relaciones si es necesario
}

