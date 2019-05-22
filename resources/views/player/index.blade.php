@extends('layouts.app')

@section('content')
    @foreach($players as $player) 
        <div class="team">
            <a href="/players/{{$player->id}}"> 
                <h1>{{ $player->name }}
                    <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                    </span>
                </h1>
            </a>
        </div>
    @endforeach
    {{ $players->links() }}
@endsection