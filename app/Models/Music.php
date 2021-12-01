<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'album_name',
        'album_artist',
        'rating',
        'review',
        'release_date',
        'user'
    ];

    public function genres() {
        return $this->belongsToMany(MusicGenre::class);
    }
}
