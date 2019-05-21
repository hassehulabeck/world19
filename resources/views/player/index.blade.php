@extends('base')

@section('main')
    @foreach($players as $player) 
        <div class="team">
            <h1>{{ $player->name }}</h1>
            <h4>Spelar för {{ $player->team->name }}.</h4>
        </div>
    @endforeach
    {{ $players->links() }}
@endsection