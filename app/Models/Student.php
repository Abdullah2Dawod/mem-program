<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscriber_id', 'name', 'grade_level',
    ];

    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }

    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }
}
