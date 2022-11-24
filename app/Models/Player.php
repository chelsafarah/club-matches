<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //use HasFactory;

    protected $fillable = [
        'clubs_id',
        'photo',
        'name',
        'height',
        'position',
        'created_at',
        'updated_at',

    ];

    public function club()
    {
        return $this->belongsTo(Club::class, 'clubs_id', 'id');
    }
}
