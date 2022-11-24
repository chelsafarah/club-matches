<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //use HasFactory;

    protected $fillable = [
        'stadiums_id',
        'name',
        'logo',
        'url',
        'thropy',
        'created_at',
        'updated_at',

    ];

    public function stadiums()
    {
        return $this->belongsTo(Stadium::class, 'stadiums_id', 'id');
    }

    public function manager()
    {
        return $this->hasMany(Manager::class, 'clubs_id');
    }

    public function player()
    {
        return $this->hasMany(Player::class, 'clubs_id');
    }

    public function match_club()
    {
        return $this->hasOne(Matches::class, 'clubs_id');
    }

    public function match_rival()
    {
        return $this->hasOne(Matches::class, 'clubs_id');
    }




}
