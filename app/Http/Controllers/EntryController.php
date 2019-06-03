<?php

namespace App\Http\Controllers;

use App\Entry;
use App\Team;
use App\Player;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{

    /**
     * Gets the view totalTable
     * 
     * @return \Illuminate\Http\Response
     */
    public function table() {
        $entries = DB::table('totaltable')->get();

        return view('table', [
            'entries' => $entries 
        ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('entry.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // Kolla om användaren redan skapat ett entry.
        // I så fall, redirecta till update.
        $user = Entry::where('user_id', Auth::id())->first();
        if ($user !== null) {
            return redirect('/entries/' . $user->id . '/edit');
        }

        // Teams
        for ($i = 1; $i<=4; $i++) {
            ${'teams' . $i } = Team::where('gruppering', $i)->orderBy('name')->get(); 
            
        }
        // Players
        for ($i = 0; $i<=5; $i++) {
            ${'players' . $i } = Player::where('gruppering', $i)->orderBy('name')->get(); 
            
        }
        return view('entry.create', [
            'teams1' => $teams1,
            'teams2' => $teams2,
            'teams3' => $teams3,
            'teams4' => $teams4,
            'players0' => $players0,
            'players1' => $players1,
            'players2' => $players2,
            'players3' => $players3,
            'players4' => $players4,
            'players5' => $players5,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'team1'  => 'required|integer',
            'team2'  => 'required|integer',
            'team3'  => 'required|integer',
            'team4'  => 'required|integer',
            'player0'  => 'required|integer',
            'player1'  => 'required|integer',
            'player2'  => 'required|integer',
            'player3'  => 'required|integer',
            'player4'  => 'required|integer',
            'player5'  => 'required|integer',
        ]);
          
        DB::table('entries')->insert([
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->team1, 
                'isPlayer' => '0', 
                'created_at' => now()
            ],
            [
                'user_id' => Auth::id(),
                'pick_id' => $request->team2,
                'isPlayer' => '0', 
                'created_at' => now()
            ],
            [
                'user_id' => Auth::id(),
                'pick_id' => $request->team3,
                'isPlayer' => '0', 
                'created_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->team4,
                'isPlayer' => '0', 
                'created_at' => now()
            ]
        ]);

        DB::table('entries')->insert([
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player0,
                'isPlayer' => '1', 
                'created_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player1,
                'isPlayer' => '1', 
                'created_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player2,
                'isPlayer' => '1', 
                'created_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player3,
                'isPlayer' => '1', 
                'created_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player4,
                'isPlayer' => '1', 
                'created_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player5,
                'isPlayer' => '1', 
                'created_at' => now()
            ]
        ]);

        return redirect('/entries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $entries = Entry::where('user_id', $user)->get();
        return view('entry.show', [
            'entries' => $entries
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        // Teams
        for ($i = 1; $i<=4; $i++) {
            ${'teams' . $i } = Team::where('gruppering', $i)->orderBy('name')->get(); 
            
        }
        // Players
        for ($i = 0; $i<=5; $i++) {
            ${'players' . $i } = Player::where('gruppering', $i)->orderBy('name')->get(); 
            
        }
        // Get existing values.
        $picks = Entry::where('user_id', Auth::id())->get();

        // Get user.
        $userID = Auth::id();

        return view('entry.edit', [
            'teams1' => $teams1,
            'teams2' => $teams2,
            'teams3' => $teams3,
            'teams4' => $teams4,
            'players0' => $players0,
            'players1' => $players1,
            'players2' => $players2,
            'players3' => $players3,
            'players4' => $players4,
            'players5' => $players5,
            'picks' => $picks,
            'userID' => $userID
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userid)
    {
        $this->validate($request, [
            'team1'  => 'required|integer',
            'team2'  => 'required|integer',
            'team3'  => 'required|integer',
            'team4'  => 'required|integer',
            'player0'  => 'required|integer',
            'player1'  => 'required|integer',
            'player2'  => 'required|integer',
            'player3'  => 'required|integer',
            'player4'  => 'required|integer',
            'player5'  => 'required|integer',
        ]);

        DB::table('entries')->where('user_id', Auth::id())->delete();
          
        DB::table('entries')->insert([
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->team1, 
                'isPlayer' => '0', 
                'updated_at' => now()
            ],
            [
                'user_id' => Auth::id(),
                'pick_id' => $request->team2,
                'isPlayer' => '0', 
                'updated_at' => now()
            ],
            [
                'user_id' => Auth::id(),
                'pick_id' => $request->team3,
                'isPlayer' => '0', 
                'updated_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->team4,
                'isPlayer' => '0', 
                'updated_at' => now()
            ]
        ]);

        DB::table('entries')->insert([
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player0,
                'isPlayer' => '1', 
                'updated_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player1,
                'isPlayer' => '1', 
                'updated_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player2,
                'isPlayer' => '1', 
                'updated_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player3,
                'isPlayer' => '1', 
                'updated_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player4,
                'isPlayer' => '1', 
                'updated_at' => now()
            ],
            [
                'user_id' => Auth::id(), 
                'pick_id' => $request->player5,
                'isPlayer' => '1', 
                'updated_at' => now()
            ]
        ]);        
        return redirect('/entries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        //
    }
}
