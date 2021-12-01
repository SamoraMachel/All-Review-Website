<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_name',
        'platform',
        'release_date',
        'rating',
        'review',
        'user'
    ];
}
