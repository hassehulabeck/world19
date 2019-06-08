@extends('layouts.app')

@section('content')
    
    @foreach ($matches as $match)
        <div class="match">
            <div class="matchnummer">{{$match->id}}</div>
            <div>
                <p>
                {{$match->homeTeam[0]->name}}
                    - 
                {{$match->awayTeam[0]->name}}
                </p>
                <p>
                {{$match->home_goals}} : {{$match->away_goals}}
                </p>                
            </div>
        </div>
    @endforeach

@endsection