@extends('layouts.app')

@section('content')
    
<table class="table-responsive">
<thead>
    <tr>
        <th>#</th>
        <th>Namn</th>
        <th class="text-right">Vinster</th>
        <th class="text-right">Mål</th>
        <th class="text-right">Nollor</th>
        <th class="text-right">Totalt</th>
    </tr>
</thead>
@foreach ($entries as $entry)
    <tr>
        <td> {{ $loop->iteration }}</td>
        <td>
            <a href="/entries/{{$entry->uid}}">{{$entry->name}}
            </a>
        </td>
        <td class="text-right">{{$entry->W}}</td>
        <td class="text-right">{{$entry->G}}</td>
        <td class="text-right">{{$entry->Z}}</td>
        <td class="text-right">{{$entry->Pts}}</td>
    </tr>
@endforeach
</table>
@endsection