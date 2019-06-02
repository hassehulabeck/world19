@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-md-4">
        <h1>Målvakter</h1>
            @foreach($goalies as $goalie) 
            <ul class="players">
                <a href="/players/{{$goalie->id}}"> 
                    <li>{{ $goalie->name }}
                        <span class="flag-icon flag-icon-{{$goalie->team->abbreviation }} ">
                        </span>
                    </li>
                </a>
            </ul>
        @endforeach    
    </div>
    <div class="col-12 col-md-4">
        <h1>Gruppering 1</h1>
        @foreach($players1 as $player) 
            <ul class="players">
                <a href="/players/{{$player->id}}"> 
                    <li>{{ $player->name }}
                        <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                        </span>
                    </li>
                </a>
            </ul>
        @endforeach    
    </div>
    <div class="col-12 col-md-4">
        <h1>Gruppering 2</h1>
        @foreach($players2 as $player) 
            <ul class="players">
                <a href="/players/{{$player->id}}"> 
                    <li>{{ $player->name }}
                        <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                        </span>
                    </li>
                </a>
            </ul>
        @endforeach    
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-4">
        <h1>Gruppering 3</h1>
        @foreach($players3 as $player) 
            <ul class="players">
                <a href="/players/{{$player->id}}"> 
                    <li>{{ $player->name }}
                        <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                        </span>
                    </li>
                </a>
            </ul>
        @endforeach    
    </div>
    <div class="col-12 col-md-4">
        <h1>Gruppering 4</h1>    
        @foreach($players4 as $player) 
            <ul class="players">
                <a href="/players/{{$player->id}}"> 
                    <li>{{ $player->name }}
                        <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                        </span>
                    </li>
                </a>
            </ul>
        @endforeach    
    </div>
    <div class="col-12 col-md-4">
        <h1>Gruppering 5</h1>
        @foreach($players5 as $player) 
            <ul class="players">
                <a href="/players/{{$player->id}}"> 
                    <li>{{ $player->name }}
                        <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                        </span>
                    </li>
                </a>
            </ul>
        @endforeach    
    </div>
</div>
@endsection