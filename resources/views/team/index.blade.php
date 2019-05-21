@extends('base')

@section('main')
    @foreach($teams as $team) 
        <div class="team">
            <h1>{{ $team->name }}</h1>
            <h4>Har följande spelare:</h4>
            @foreach ($team->players as $player)
                <a href="/players/{{$player->id}}"> {{ $player->name }}, ({{ $player->points }})</a><br />
            @endforeach
        </div>
    @endforeach
    {{ $teams->links() }}
@endsection