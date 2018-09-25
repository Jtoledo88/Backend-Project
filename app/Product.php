<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'image_name', 'title', 'subtitle', 'text',
    ];

   
}
