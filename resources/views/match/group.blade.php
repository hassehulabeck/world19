@extends('layouts.app')

@section('content')

<h1>Grupp {{$matches[0]->group}}</h1>
<table class="table table-responsive table-borderless">
    <tr>
        <th>#</th>
        <th>Lag</th>
        <th>matcher</th>
        <th>V</th>
        <th>O</th>
        <th>F</th>
        <th>Mål</th>
        <th>Poäng</th>
    </tr>
        @foreach ($table as $team)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$team->name}}</td>
            <td>{!! ($team->wins + $team->draws + $team->losses)  !!}</td>
            <td>{{$team->wins}}</td>
            <td>{{$team->draws}}</td>
            <td>{{$team->losses}}</td>
            <td>{{$team->goalsFor}} - {{$team->goalsAgainst}}</td>
            <td>{!! ($team->wins * 3) + ($team->draws) !!}</td>
            </tr>
        @endforeach
        
</table>

@endsection