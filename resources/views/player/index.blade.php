@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-md-4">
        <h1>Målvakter</h1>
            @foreach($goalies->sortBy('team_id') as $goalie) 
            <ul class="players">
                    <a href="/players/{{$goalie->id}}"> 
                        <li>
                            <span class="flag-icon flag-icon-{{$goalie->team->abbreviation }} ">
                            </span>
                            {{ $goalie->name }}
                            [ {{ count($goalie->entries) }} ]
                            @for ($i = 0; $i < $goalie->points; $i++)
                                &star;
                            @endfor
                        </li>    
                    </a>
                </ul>
        @endforeach    
    </div>
    <div class="col-12 col-md-4">
        <h1>Gruppering 1</h1>
        @foreach($players1->sortBy('team_id') as $player) 
            <ul class="players">
                <a href="/players/{{$player->id}}"> 
                    <li>
                        <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                        </span>
                        {{ $player->name }}
                        [ {{ count($player->entries) }} ]
                        @for ($i = 0; $i < $player->points; $i++)
                            &#10026;
                        @endfor
                    </li>    
                </a>
            </ul>
        @endforeach    
    </div>
    <div class="col-12 col-md-4">
        <h1>Gruppering 2</h1>
        @foreach($players2->sortBy('team_id') as $player) 
            <ul class="players">
                    <a href="/players/{{$player->id}}"> 
                        <li>
                            <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                            </span>
                            {{ $player->name }}
                            [ {{ count($player->entries) }} ]
                            @for ($i = 0; $i < $player->points; $i++)
                                &#10026;
                            @endfor
                        </li>    
                    </a>
                </ul>
        @endforeach    
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-4">
        <h1>Gruppering 3</h1>
        @foreach($players3->sortBy('team_id') as $player) 
            <ul class="players">
                    <a href="/players/{{$player->id}}"> 
                        <li>
                            <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                            </span>
                            {{ $player->name }}
                            [ {{ count($player->entries) }} ]
                            @for ($i = 0; $i < $player->points; $i++)
                                &#10026;
                            @endfor
                        </li>    
                    </a>
                </ul>
        @endforeach    
    </div>
    <div class="col-12 col-md-4">
        <h1>Gruppering 4</h1>    
        @foreach($players4->sortBy('team_id') as $player) 
            <ul class="players">
                    <a href="/players/{{$player->id}}"> 
                        <li>
                            <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                            </span>
                            {{ $player->name }}
                            [ {{ count($player->entries) }} ]
                            @for ($i = 0; $i < $player->points; $i++)
                                &#10026;
                            @endfor
                        </li>    
                    </a>
                </ul>
        @endforeach    
    </div>
    <div class="col-12 col-md-4">
        <h1>Gruppering 5</h1>
        @foreach($players5->sortBy('team_id') as $player) 
            <ul class="players">
                    <a href="/players/{{$player->id}}"> 
                        <li>
                            <span class="flag-icon flag-icon-{{$player->team->abbreviation }} ">
                            </span>
                            {{ $player->name }}
                            [ {{ count($player->entries) }} ]
                            @for ($i = 0; $i < $player->points; $i++)
                                &#10026;
                            @endfor
                        </li>    
                    </a>
                </ul>
        @endforeach    
    </div>
    <p><i>Siffran inom klamrarna är antal entries som spelaren är med på. En &star; för målvakterna innebär en "hållen nolla", och en  &#10026; för utespelarna innebär ett mål.</i></p>
</div>
@endsection