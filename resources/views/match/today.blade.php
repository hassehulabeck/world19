@extends('layouts.app')

@section('content')
    <h1>Dagens matcher</h1>
    @foreach ($matches as $match)
    <div class="match">
        <div class="matchnummer">
            <h1>{{$match->id}}</h1>
            <p>{{$match->venue}}</p>
            <p>{{$match->date->format('H:i')}}</p>
        </div>
        <div>
            <h4>
            {{$match->homeTeam[0]->name}}
                - 
            {{$match->awayTeam[0]->name}}
            </h4>
            <p>
            {{$match->home_goals}} : {{$match->away_goals}}
            </p>           
            
            {{$match->homeTeam[0]->name}} finns med i 
            {!! count($match->homeTeam[0]->entries) !!}
            @if (count($match->homeTeam[0]->entries) == 1)
                entry.
            @else
                entries.
            @endif    

            {{$match->awayTeam[0]->name}} finns med i 
            {!! count($match->awayTeam[0]->entries) !!}
            @if (count($match->awayTeam[0]->entries) == 1)
                entry.
            @else
                entries.
            @endif    
        </div>
    </div>
    @endforeach
@endsection