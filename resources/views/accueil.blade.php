@extends('default')

@section('content')

<h4>Derniers documents édités</h4>

<ul>
    {{--@foreach($documents as $document)--}}
    {{--<li><a href="{{ route('dop.show', $document->id) }}">--}}
            {{--DOP Ouvrier : Ouverte par {{ $document->nom }} {{ $document->prenom }} le {{ $document->date_demande }}--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--@endforeach--}}
</ul>

@endsection