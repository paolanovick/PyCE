<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Si los nombres de las columnas en la base de datos son diferentes a los nombres convencionales, configúralo aquí
    protected $fillable = [
        'filename',
        'path',
        'alt_text',
    ];

    // Si tu tabla no usa los nombres por defecto
    protected $table = 'images';
}
