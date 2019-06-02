@extends('layouts.app')

@section('content')
@foreach ($users as $user)
    <ul class="entries">
        <li>
            <a data-toggle="collapse" href="#collapse{{$user->id}}" aria-expanded="false" aria-controls="collapseExample">
                {{ $user->name }}
            </a>
        </li>
    </ul>
    <div class="collapse entryholder" id="collapse{{$user->id}}">
        <ul class="entries">
            @php
                $userPoints = 0;
            @endphp
            @foreach($user->entries as $entry)
                @if ($entry->isPlayer == 0)           
                    <li class="entry">
                        <a href="/teams/{{$entry->team->id}}"> 
                            <span class="flag-icon flag-icon-{{$entry->team->abbreviation }} ">
                            </span>
                            {{ $entry->team->name }}  - 
                            {{ $entry->team->points }}
                        </a>
                    </li>            
                    @php
                        $userPoints += $entry->team->points;
                    @endphp
                @else 
                    <li class="entry">
                        <a href="/players/{{$entry->player->id}}"> 
                            <span class="flag-icon flag-icon-{{$entry->player->team->abbreviation }} ">
                            </span>
                            {{ $entry->player->name }} - 
                            {{ $entry->player->points }} 
                        </a>
                    </li>            
                    @php
                        $userPoints += $entry->player->points;
                    @endphp
                @endif
            @endforeach
            Totalt {{ $userPoints }} poäng.
        </ul>
    </div>
        
@endforeach

@endsection