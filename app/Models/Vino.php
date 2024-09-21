<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    use HasFactory;
   

    // Define the table associated with the model if it is not the plural form of the model name
    protected $table = 'vinos';

    // Define the primary key if it is not 'id'
    protected $primaryKey = 'id';

    // Set whether the model should use timestamps
    public $timestamps = true;

    // Define the fillable attributes
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'ficha_tecnica', 
        'notas_de_cata', 
        'sugerencias_de_acompaniamiento', 
    ];

    // Define the attributes that are hidden from arrays
    protected $hidden = [
        // 'column_name', // Add column names you want to hide
    ];

    // Define the attributes that should be cast to native types
    protected $casts = [
        'precio' => 'decimal:2',
    ];
}
