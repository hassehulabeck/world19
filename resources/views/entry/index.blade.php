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
            @foreach($entries as $entry) 
            @if ($user->id == $entry->user_id)
            <li class="entry">
                <a href="/teams/{{$entry->team_id}}"> 
                    <span class="flag-icon flag-icon-{{$entry->team->abbreviation }} ">
                    </span>
                    {{ $entry->team->name }}
                </a>
            </li>            
            @endif
            @endforeach
        </ul>
    </div>
        
@endforeach

@endsection