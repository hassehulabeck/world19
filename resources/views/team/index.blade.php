@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-md-6">
        <h1>Gruppering 1</h1>
        @foreach ($teams1 as $team)      
            <ul class="teams">      
                <li>
                    <span class="flag-icon flag-icon-{{$team->abbreviation }} ">
                    </span>
                    <a href="/teams/{{$team->id}}">
                    {{ $team->name }}
                    [ {{ count($team->entries) }} ]
                    @for ($i = 0; $i < $team->points; $i++)
                        &starf;
                    @endfor
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
    <div class="col-12 col-md-6">
        <h1>Gruppering 2</h1>
        @foreach ($teams2 as $team)      
            <ul class="teams">      
                <li>
                    <span class="flag-icon flag-icon-{{$team->abbreviation }} ">
                    </span>
                    <a href="/teams/{{$team->id}}">
                    {{ $team->name }}
                    [ {{ count($team->entries) }} ]
                    @for ($i = 0; $i < $team->points; $i++)
                        &starf;
                    @endfor
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6">
        <h1>Gruppering 3</h1>
        @foreach ($teams3 as $team)      
            <ul class="teams">      
                <li>
                    <span class="flag-icon flag-icon-{{$team->abbreviation }} ">
                    </span>
                    <a href="/teams/{{$team->id}}">
                    {{ $team->name }}
                    [ {{ count($team->entries) }} ]
                    @for ($i = 0; $i < $team->points; $i++)
                        &starf;
                    @endfor
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
    <div class="col-12 col-md-4">
            <h1>Gruppering 4</h1>
            @foreach ($teams4 as $team)      
                <ul class="teams">      
                    <li>
                        <span class="flag-icon flag-icon-{{$team->abbreviation }} ">
                        </span>
                        <a href="/teams/{{$team->id}}">
                        {{ $team->name }}
                        [ {{ count($team->entries) }} ]
                        @for ($i = 0; $i < $team->points; $i++)
                            &starf;
                        @endfor
                        </a>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
    <p><i>Siffran inom klamrarna är antal entries som laget är med på. En &starf; per vinst.</i></p>
</div>    
@endsection