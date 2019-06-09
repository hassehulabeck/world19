<?php

namespace App\Http\Controllers;

use App\Match;
use App\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of group matches and standings.
     *
     * @return \Illuminate\Http\Response
     */
    public function matchesByGroup($group)
    {
        strtoupper($group);

        if ($group == "all") {
            $matches = Match::all();
            $table = null;
        }
        else {
            $matches = Match::where('group', $group)->get();
            $table = Team::where('grupp', $group)->orderByRaw('goalsFor - goalsAgainst DESC')->orderBy('points', 'desc')->get();
        }
        return view('match.group', [
            'matches' => $matches,
            'table' => $table
        ]);
    }

    /**
     * Display a listing of todays matches.
     *
     * @return \Illuminate\Http\Response
     */
    public function matchesToday()
    {
        $matches = Match::whereDate('date', DB::raw('CURDATE()'))->get();
        return view('match.today', [
            'matches' => $matches
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::all();
        return view('match.index', [
            'matches' => $matches
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
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        $match = Match::findOrFail($match);
        return view('match.show', [
            'match' => $match
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        //
    }
}
