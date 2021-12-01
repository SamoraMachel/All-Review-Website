<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_name',
        'album_artist',
        'rating',
        'review',
        'release_date',
        'user'
    ];
}
