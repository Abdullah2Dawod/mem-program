<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'details',
        'duration',
        'price',
        'level',
        'status',
        'number_subscribers',
    ];
}
