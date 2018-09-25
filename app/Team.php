<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'image_name', 'nombre','cargo', 'mensaje'
         ];
}
