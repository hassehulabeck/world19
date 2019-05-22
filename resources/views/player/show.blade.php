@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $player->name}}</h1>
        <h3>
            <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
            </span>
            <a href="/teams/{{$player->team->id}}"> 
                {{ $player->team->name }}
            </a>
        </h3>
        <p>{{ $player->points }} poäng hittills.</p>
    </div> 
@endsection