@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $player->name}}</h1>
        <h3>
            <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
            </span>
            {{ $player->team->name }}
        </h3>
        <p>{{ $player->points }} poäng hittills.</p>
    </div> 
@endsection