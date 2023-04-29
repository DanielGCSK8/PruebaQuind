<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'camera_id',
        'client_id',
        'start_date',
        'end_Date',
    ];

    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
