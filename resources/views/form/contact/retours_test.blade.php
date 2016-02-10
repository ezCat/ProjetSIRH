@extends('default')

<head>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/start/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

@section('content')

    <h1>Retours Bêta-testeurs</h1>
    <br>

    {!! Form::open(['url' => route('contact.store')]) !!}

   
    {!! Form::label('description', 'Remarques/Observations : ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}<br>
    {!! Form::hidden('gid', $_SERVER['AUTH_USER'], ['class' => 'form-control']) !!}

    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
      

    <br><br><br>

    {!! Form::close() !!}

@endsection