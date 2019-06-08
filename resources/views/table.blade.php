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
@php
$temp = 0;
@endphp
@foreach ($entries as $entry)
    <tr>
        @if ($entry->Pts != $temp)
            <td> {{ $loop->iteration }}</td>
            @php
                $temp = $entry->Pts;
            @endphp
        @else 
            <td></td>        
        @endif
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