<?php

namespace App\Http\Controllers;

use App\Models\VideoGame;
use Illuminate\Http\Request;

class VideoGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoGames = VideoGame::all();
        return view("videoGame")->with("videoGames", $videoGames);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.videoGame');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->file("image")->store("images", 'public');

        $gamesObject = [
            'image' => $request->file('image')->hashName(),
            'game_name' => $request->input('game_name'),
            'platform' => $request->input('platform'),
            'release_date' => $request->input('release_date'),
            'rating' => $request->input('rating'),
            'review' => $request->input('review'),
            'user' => $request->input('user')
        ];

        VideoGame::create($gamesObject);

        return redirect('/videogame');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoGame  $videoGame
     * @return \Illuminate\Http\Response
     */
    public function show(VideoGame $videoGame)
    {
        return view("detail.video")->with("videoGame", $videoGame);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoGame  $videoGame
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoGame $videoGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideoGame  $videoGame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoGame $videoGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoGame  $videoGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoGame $videoGame)
    {
        //
    }
}
