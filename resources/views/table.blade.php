@extends('layouts.app')

@section('content')
    
<table>
<thead>
    <tr>
        <th>Placering</th>
        <th>Namn</th>
        <th>Vinster</th>
        <th>Mål</th>
        <th>Nollor</th>
        <th>Totalt</th>
    </tr>
</thead>
@foreach ($entries as $entry)
    <tr>
        <td> {{ loop->index + 1}}</td>
        <td>{{$entry->name}}</td>
        <td>{{$entry->W}}</td>
        <td>{{$entry->G}}</td>
        <td>{{$entry->Z}}</td>
        <td>{{$entry->Pts}}</td>
    </tr>
@endforeach
</table>
@endsection