<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MusicMusicGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_music_genres', function (Blueprint $table) {
            $table->integer("musicID");
            $table->integer("genreID");
            $table->foreign("musicID")
                ->references("id")
                ->on("music")
                ->onDelete("cascade");
            $table->foreign("genreID")
                ->references("id")
                ->on("music_genres")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
