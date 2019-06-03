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
        @can('admin-only')
            {!! Form::open(['route' => ['players.update', $player->id], 'method' => 'post']) !!}
            {{ method_field('PATCH') }}
            @csrf

            <div class="form-group">
                @if ($player->gruppering == 0)
                    <input type="submit" class="btn btn-sm btn-danger" value="Lägg till en nolla">
                @else    
                    <input type="submit" class="btn btn-sm btn-danger" value="Lägg till ett mål">
                @endif
            </div>
            {!! Form::close() !!}
        @endcan
    </div> 
@endsection