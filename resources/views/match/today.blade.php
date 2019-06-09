@extends('layouts.app')

@section('content')
    <h1>Dagens matcher</h1>
    @foreach ($matches as $match)
    <div class="match row">
        <div class="matchnummer col-12 col-md-2">
            <h1>{{$match->id}}</h1>
            <p>{{$match->venue}}</p>
            <p>{{$match->date->format('H:i')}}</p>
        </div>
        <div class="col-6 col-md-4 offset-md-1">
            {{$match->homeTeam[0]->name}}
            <span class="flag-icon flag-icon-{{$match->homeTeam[0]->abbreviation }} ">
            </span>
            @if ($match->home_goals !== null)
                <h4>
                    {{$match->home_goals}}
                </h4>                                            
            @endif
            <p>Ingår i
            {!! count($match->homeTeam[0]->entries) !!}
            @if (count($match->homeTeam[0]->entries) == 1)
                entry.
            @else
                entries.
            @endif
            </p>    
            <p>
            {{-- Spelare (<i>entries</i>)</p><p> --}}
            @foreach ($match->homeTeam[0]->players as $player)
                @if (count($player->entries) != 0)
                    {{$player->name}} (<i>
                    {!! count($player->entries) !!}</i>) <br>                    
                @endif
            @endforeach
            </p>
        </div>
        <div class="col-6 col-md-4 offset-md-1"> 
            <span class="flag-icon flag-icon-{{$match->awayTeam[0]->abbreviation }} ">
            </span>
            {{$match->awayTeam[0]->name}}
            @if ($match->away_goals !== null)
                <h4>
                    {{$match->away_goals}}
                </h4>                                            
            @endif
            <p>Ingår i 
            {!! count($match->awayTeam[0]->entries) !!}
            @if (count($match->awayTeam[0]->entries) == 1)
                entry.
            @else
                entries.
            @endif    
            </p>
            <p>
            {{-- Spelare (<i>entries</i>)</p><p> --}}
            @foreach ($match->awayTeam[0]->players as $player)
                @if (count($player->entries) != 0)
                    {{$player->name}} (<i>
                    {!! count($player->entries) !!}</i>) <br>                    
                @endif
            @endforeach
            </p>
        </div>
    </div>
    @endforeach
@endsection