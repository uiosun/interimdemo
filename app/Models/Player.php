<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'hp',
        'thew',
        'enemy',
        'attack',
        'defence',
    ];

    public const CACHE_PREFIX = 'player:';
}
