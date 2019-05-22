@extends('layouts.app')

@section('content')
    @foreach($teams as $team) 
        <div class="team">
            <a href="/teams/{{$team->id}}">
                <h1>            <span class="flag-icon flag-icon-{{$team->abbreviation }} ">
                    </span>
         {{ $team->name }}</h1>
            </a>
            <h4>Har följande spelare:</h4>
            @if ($team->players != 'null')
                @foreach ($team->players as $player)
                    <a href="/players/{{$player->id}}"> {{ $player->name }}, 
                        ({{ $player->points }})</a><br />
                @endforeach                
            @endif
        </div>
    @endforeach
    {{ $teams->links() }}
@endsection