<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'name',
        'iso',
        'format',
    ];

    public function cameras(){

    return $this->hasMany(Camera::class);

    }
}
