@extends('layouts.app')

@section('content')
    
    @foreach ($matches as $match)
        <div class="match row">
            <div class="matchnummer col-12 col-md-2">
                <h1>{{$match->id}}</h1>
                <p>{{$match->venue}}</p>
                <p>{{$match->date->format('j M, H:i')}}</p>
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
            </div>
        </div>
    @endforeach

@endsection