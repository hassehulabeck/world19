@extends('layouts.app')

@section('content')
    <div>
        <h1>
            <span class="flag-icon flag-icon-{{$team->abbreviation }} ">
            </span>
            {{ $team->name}}
        </h1>
        <p> {{ $team->about }} </p>
        <h3>Har följande spelare</h3>
        <ul class="players">
        @foreach ($team->players as $player)
            <li><a href="/players/{{$player->id}} "> {{ $player->name }}, 
                ({{ $player->points }}) </a>
            </li>
        @endforeach
        </ul>
        <h3>Antal vinster</h3>
        <p> {{ $team->points }} </p>
        @can('admin-only')
        {!! Form::open(['route' => ['teams.update', $team->id], 'method' => 'post']) !!}
        {{ method_field('PATCH') }}
        @csrf

        <div class="form-group">
            <input type="submit" class="btn btn-sm btn-danger" value="Lägg till en vinst">
        </div>
        {!! Form::close() !!}
    @endcan

    </div> 
@endsection