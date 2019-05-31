@extends('layouts.app')
@section('content')
    <ul>
    @foreach($entries as $entry)
        @if ($entry->isPlayer == 0)
        <li class="entry">
            <span class="flag-icon flag-icon-{{$entry->team->abbreviation }} ">
            </span>
            <a href="/teams/{{$entry->team->id}}"> 
                {{ $entry->team->name }}
            </a>
        </li>  
        @else 
            <li class="entry">
                <a href="/players/{{$entry->player->id}}"> 
                    {{ $entry->player->name }}
                </a>
            </li>     
        @endif 
    @endforeach

    </ul>
@endsection