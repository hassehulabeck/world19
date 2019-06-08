@extends('layouts.app')

@section('content')
    <h1>Forum</h1>
    @include('forum.create')
    @foreach ($posts as $post)

        <div class="forumpost">
            <h4>{{$post->title}}</h4>
            <p>{{$post->content}}</p>
            <p class="author">Av {{$post->user->name}}, {{$post->created_at}}</p>
        </div>
        
    @endforeach
    {{ $posts->links() }}
@endsection