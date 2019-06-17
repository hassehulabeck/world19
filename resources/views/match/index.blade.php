@extends('layouts.app')

@section('content')
    
    @foreach ($matches as $match)
        <div class="match row {{$match->date < new DateTime() ? 'passed' : ''  }} ">
            <div class="matchnummer col-12 col-md-2">
                <h1>{{$match->id}}</h1>
                <p>{{$match->venue}}</p>
                <p>{{$match->date->format('j M, H:i')}}</p>
            </div>
                    
            <div class="col-6 col-md-4 offset-md-1">
                @if (count($match->homeTeam) > 0)
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
                    
                @else
                    {{ $match->group }}               
                @endif
            @can('admin-only')
                @if ($match->home_goals === null)
                    
                {!! Form::open(['route' => ['matches.update', $match->id], 'method' => 'post']) !!}
                {{ method_field('PATCH') }}
                @csrf

                <div class="form-group">
                        <input type="text" name="homeGoals" value="0">
                        <input type="text" name="awayGoals" value="0">
                        <input type="submit" class="btn btn-sm btn-danger" value="Spara resultatet">
                </div>
                {!! Form::close() !!}
                @endif
    
            @endcan
        </div>
    @endforeach

@endsection