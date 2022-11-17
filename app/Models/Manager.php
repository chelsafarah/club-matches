<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //use HasFactory;

    protected $fillable = [
        'clubs_id',
        'name',
        'old',
        'nationality',
        'created_at',
        'updated_at',

    ];
}
