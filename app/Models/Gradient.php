<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gradient extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'style', 'direction', 'color1', 'color2', 'format'
    ];
}