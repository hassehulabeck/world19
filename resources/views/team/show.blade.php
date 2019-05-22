@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $team[0]->name}}</h1>
        <h3>Har följande spelare</h3>
        @foreach ($team[0]->players as $player)
            <a href="/players/{{$player->id}} "> {{ $player->name }}, 
                ({{ $player->points }}) </a><br/>
        @endforeach
        <h3>Poäng</h3>
        <p> {{ $team[0]->points }} </p>
    </div> 
@endsection