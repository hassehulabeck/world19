@extends('layouts.app')
@section('content')
    <h1>Entry</h1>
    <p>för {{$entries[0]->user->name}}</p>
    <ul>
    @foreach($entries as $entry)
        @if ($entry->isPlayer == 0)
        <li class="entry">
            <span class="flag-icon flag-icon-{{$entry->team->abbreviation }} ">
            </span>
            <a href="/teams/{{$entry->team->id}}"> 
                {{ $entry->team->name }}
                @for ($i = 0; $i < $entry->team->points; $i++)
                    &starf;
                @endfor
            </a>
        </li>  
        @else 
            <li class="entry">
                    <span class="flag-icon flag-icon-{{$entry->player->team->abbreviation }} ">
                        </span>
                            <a href="/players/{{$entry->player->id}}"> 
                    {{ $entry->player->name }}
                    @for ($i = 0; $i < $entry->player->points; $i++)
                        &#10026;
                    @endfor

                </a>
            </li>     
        @endif 
    @endforeach

    </ul>
@endsection