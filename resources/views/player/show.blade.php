@extends('base')

@section('main')
    <div>
        <h1>{{ $player[0]->name}}</h1>
        <h3> {{ $player[0]->team->name }}</h3>
        <p>{{ $player[0]->points }} poäng hittills.</p>
    </div> 
@endsection