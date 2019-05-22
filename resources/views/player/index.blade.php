@extends('layouts.app')

@section('content')
    @foreach($players as $player) 
        <div class="team">
            <a href="/players/{{$player->id}}"> 
                <h1>{{ $player->name }}</h1>
            </a>
            <h4>Spelar för {{ $player->team->name }}.</h4>
        </div>
    @endforeach
    {{ $players->links() }}
@endsection