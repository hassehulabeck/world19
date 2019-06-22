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
            $table = Team::where('grupp', $group)
            ->where('id', '<', 37)
            ->orderByRaw('goalsFor - goalsAgainst DESC')
            ->orderBy('points', 'desc')
            ->get();
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
        // Spara i matches
        $aktuellMatch = Match::find($match->id);

        $aktuellMatch->home_goals = $request->homeGoals;
        $aktuellMatch->away_goals = $request->awayGoals;

        $aktuellMatch->save();

        // Spara per team.
        $homeTeam = Team::find($aktuellMatch->home_team);
        $awayTeam = Team::find($aktuellMatch->away_team);

        // Hemmalagets mål
        $cgf = $homeTeam->goalsFor + $request->homeGoals;
        $homeTeam->goalsFor = $cgf; 
        $cga = $homeTeam->goalsAgainst + $request->awayGoals;
        $homeTeam->goalsAgainst = $cga; 

        // Bortalagets mål
        $cgf = $awayTeam->goalsFor + $request->awayGoals;
        $awayTeam->goalsFor = $cgf; 
        $cga = $awayTeam->goalsAgainst + $request->homeGoals;
        $awayTeam->goalsAgainst = $cga; 
        
        // Om det blev hemmavinst
        if ($request->homeGoals > $request->awayGoals) {
            $homeTeam->wins = $homeTeam->wins + 1; 
            $awayTeam->losses = $awayTeam->losses + 1; 
            $homeTeam->points = $homeTeam->points + 1;
        }
        // Om det blev bortavinst
        if ($request->homeGoals < $request->awayGoals) {
            $awayTeam->wins = $awayTeam->wins + 1; 
            $homeTeam->losses = $homeTeam->losses + 1; 
            $awayTeam->points = $awayTeam->points + 1;
        }
        // Om det blev oavgjort
        if ($request->homeGoals == $request->awayGoals) {
            $draws = $homeTeam->draws + 1;
            $homeTeam->draws = $draws; 
            $draws = $awayTeam->draws + 1;
            $awayTeam->draws = $draws; 
        }
        
        $homeTeam->save();
        $awayTeam->save();

        return redirect('matches');
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
