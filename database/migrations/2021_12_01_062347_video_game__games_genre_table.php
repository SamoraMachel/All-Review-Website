<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VideoGameGamesGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_games_games_genre', function (Blueprint $table) {
            $table->integer("videoID");
            $table->integer("genreID");
            $table->foreign("videoID")
                ->references("id")
                ->on("video_games")
                ->onDelete("cascade");
            $table->foreign("genreID")
                ->references("id")
                ->on("games_genres")
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
