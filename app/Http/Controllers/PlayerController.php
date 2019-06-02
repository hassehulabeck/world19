<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goalies = Player::where('gruppering', 0)->get();
        $players1 = Player::where('gruppering', 1)->get();
        $players2 = Player::where('gruppering', 2)->get();
        $players3 = Player::where('gruppering', 3)->get();
        $players4 = Player::where('gruppering', 4)->get();
        $players5 = Player::where('gruppering', 5)->get();
        return view('player.index', [
            'goalies' => $goalies,
            'players1' => $players1,
            'players2' => $players2,
            'players3' => $players3,
            'players4' => $players4,
            'players5' => $players5
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('player.show', [
            'player' => $player
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        Player::where('id', $player->id)
            ->increment('points', 1, [
                'updated_at' => now()
            ]);

            return redirect('players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
