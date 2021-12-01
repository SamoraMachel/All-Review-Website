<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicGenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre'
    ];

    public function musics() {
        return $this->belongsToMany(Music::class);
    }
}
