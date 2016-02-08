@extends('home')

@section('content')

    <h1>Ouverture d'une DOP : Ouvrier</h1>
    <br>

    {!! Form::open(['url' => route('dop.store')]) !!}

    {!! Form::label('nom', 'Nom : ') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}

    {!! Form::label('prenom', 'Prénom : ') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}

    {!! Form::close() !!}

@endsection