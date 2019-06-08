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
        @foreach ($team->players->sortBy('gruppering') as $player)
            @if ($player->gruppering == 0)
                <li>MV                
            @else
                <li>{{$player->gruppering}}
            @endif
            <a href="/players/{{$player->id}} "> {{ $player->name }} 
            @for ($i = 0; $i < $player->points; $i++)
                @if ($player->gruppering == 0)
                    &star;
                @else
                    &#10026;
                @endif
            @endfor     
            </a>

            </li>
        @endforeach
        </ul>
        <h3>Antal vinster</h3>
        @for ($i = 0; $i < $team->points; $i++)
            &starf;
        @endfor
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