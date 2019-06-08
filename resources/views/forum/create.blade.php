@if (count($errors) > 0 ) 
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }} </li>
   @endforeach
  </ul>
@endif

@if (Auth::user())
    <h3>Meddelande</h3>
    {!! Form::open(['route' => 'forum.store']) !!}
    <div class="row forumrow">
            <div class="col-12">
            
    <div class="form-group">
        {!! Form::label('title', 'Ämne') !!}
        <input type="text" name="title" />
    </div>
    <div class="form-group">
            {!! Form::label('content', 'Meddelande') !!}
            <textarea name="content" cols="30" rows="6"></textarea>
    </div>

    {!! Form::submit('Publicera på forumet', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}

@endif