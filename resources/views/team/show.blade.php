@extends('layouts.app')

@section('content')
    <div>
        <h1>
            <span class="flag-icon flag-icon-{{$team->abbreviation }} ">
            </span>
            {{ $team->name}}
        </h1>
        <h3>Har följande spelare</h3>
        @foreach ($team->players as $player)
            <a href="/players/{{$player->id}} "> {{ $player->name }}, 
                ({{ $player->points }}) </a><br/>
        @endforeach
        <h3>Poäng</h3>
        <p> {{ $team->points }} </p>
    </div> 
@endsection