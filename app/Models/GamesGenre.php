<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamesGenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre'
    ];

    public function VideoGames() {
        return $this->belongsToMany(VideoGame::class);
    }
}
