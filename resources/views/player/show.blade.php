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
        @if ($player->insta != null)
            <a href="{{ $player->insta }}">
                <img class="insta" src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Instagram_simple_icon.svg" alt="instagram">
            </a>
        @endif
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