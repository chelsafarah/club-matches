<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    //use HasFactory;

    protected $table='stadiums';

    protected $fillable = [
        'name',
        'capacity',
        'address',
        'created_at',
        'updated_at',

    ];

    //relation
    public function club()
    {
        return $this->hasOne(Club::class);
    }
}
