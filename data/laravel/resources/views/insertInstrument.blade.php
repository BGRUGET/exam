@extends('layouts.app')
@section('title', 'Insert Instrument')
@section('content')
    {{ Form::open(['url' => '/insertInstrumentAction']) }}
        {{ Form::label('family','famille') }}
        {{ Form::text('family') }}
        {{ Form::label('type','instrument') }}
        {{ Form::text('type') }}
        {{ Form::label('brand','marque') }}
        {{ Form::text('brand') }}
        {{ Form::label('name','dénomination') }}
        {{ Form::text('name') }}
        {{ Form::label('quantity','stock') }}
        {{ Form::number('quantity') }}
        {{ Form::submit('Ajouter') }}

@endsection
