@extends('layouts.app')

@section('content')

@if (count($errors) > 0 ) 
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }} </li>
   @endforeach
  </ul>
@endif
<div class="row">
<div class="col-12 col-md-6">

{!! Form::open(['route' => 'entries.store']) !!}
 
<div class="form-group">
    {!! Form::label('team1', 'Team 1') !!}
    <select class="form-control" name="team1">
            <option value="null" >
                Inget lag valt
            </option>
            @foreach($teams1 as $team)
            <option value="{{ $team->id}}" >
                {{$team->name}}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('team2', 'Team 2') !!}
    <select class="form-control" name="team2">
            <option value="null" >
                    Inget lag valt
                </option>
            @foreach($teams2 as $team)
            <option value="{{ $team->id}}" >
                {{$team->name}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('team3', 'Team 3') !!}
    <select class="form-control" name="team3">
            <option value="null" >
                    Inget lag valt
                </option>
            @foreach($teams3 as $team)
            <option value="{{ $team->id}}" >
                {{$team->name}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('team4', 'Team 4') !!}
    <select class="form-control" name="team4">
            <option value="null" >
                    Inget lag valt
                </option>
            @foreach($teams4 as $team)
            <option value="{{ $team->id}}" >
                {{$team->name}}
            </option>
        @endforeach
    </select>
</div>

</div>
<div class="col-12 col-md-6">
<div class="form-group">
    {!! Form::label('player0', 'Målvakt') !!}
    <select class="form-control" name="player0">
            <option value="null" >
                    Ingen spelare vald
                </option>
            @foreach($players0 as $player)
            <option value="{{ $player->id}}" >
                {{$player->name}} - 
                {{$player->team->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('player1', 'Utespelare 1') !!}
    <select class="form-control" name="player1">
            <option value="null" >
                    Ingen spelare vald
                </option>
            @foreach($players1 as $player)
            <option value="{{ $player->id}}" >
                {{$player->name}} - 
                {{$player->team->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('player2', 'Utespelare 2') !!}
    <select class="form-control" name="player2">
            <option value="null" >
                    Ingen spelare vald
                </option>
            @foreach($players2 as $player)
            <option value="{{ $player->id}}" >
                {{$player->name}} - 
                {{$player->team->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('player3', 'Utespelare 3') !!}
    <select class="form-control" name="player3">
            <option value="null" >
                    Ingen spelare vald
                </option>
            @foreach($players3 as $player)
            <option value="{{ $player->id}}" >
                {{$player->name}} - 
                {{$player->team->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('player4', 'Utespelare 4') !!}
    <select class="form-control" name="player4">
            <option value="null" >
                    Ingen spelare vald
                </option>
            @foreach($players4 as $player)
            <option value="{{ $player->id}}" >
                {{$player->name}} - 
                {{$player->team->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('player5', 'Utespelare 5') !!}
    <select class="form-control" name="player5">
            <option value="null" >
                    Ingen spelare vald
                </option>
            @foreach($players5 as $player)
            <option value="{{ $player->id}}" >
                {{$player->name}} - 
                {{$player->team->name }}
            </option>
        @endforeach
    </select>
</div>

{!! Form::submit('Spara mitt entry', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}
</div>
</div>
@endsection