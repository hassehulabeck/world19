<?php

namespace App\Http\Controllers;

use App\Forumpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ForumpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Forumpost::orderBy('created_at', 'desc')->paginate(3);
        return view('forum.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
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
            'title'  => 'required|string',
            'content'  => 'required|string'
        ]);
          
        DB::table('forumposts')->insert([
            [
                'user_id' => Auth::id(), 
                'title' => $request->title, 
                'content' => $request->content, 
                'created_at' => now()
            ]
        ]);

        return redirect()->route('forum.index')->with('success', 'Ditt meddelande har publicerats.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forumpost  $forumpost
     * @return \Illuminate\Http\Response
     */
    public function show(Forumpost $forumpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forumpost  $forumpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Forumpost $forumpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forumpost  $forumpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forumpost $forumpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forumpost  $forumpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forumpost $forumpost)
    {
        //
    }
}
