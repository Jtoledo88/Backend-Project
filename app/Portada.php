<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portada extends Model
{
    protected $fillable = [
        'titulo', 'subtitulo'
    ];
}
