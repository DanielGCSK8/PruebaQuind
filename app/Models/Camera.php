<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    use HasFactory;

    protected $table = 'cameras';

    protected $fillable = [
        'brand', 'model', 'support_flash', 'reference', 'status', 'movie_id'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
