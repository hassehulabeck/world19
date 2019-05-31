@extends('layouts.app')

@section('content')
    @foreach($teams as $team) 
        <div class="team">
            <h3>
                <span class="flag-icon flag-icon-{{$team->abbreviation }} ">
                </span>
                <a href="/teams/{{$team->id}}">
                    {{ $team->name }}
                </a>
            </h3>
        </div>
    @endforeach
    {{ $teams->links() }}
@endsection