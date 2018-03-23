@extends('layouts.app')

@section('content')
    {{ Form::open(['url' => '/updateInstrumentAction']) }}
    {{ Form::hidden('id','$instrument->id') }}
        {{ Form::label('family','famille') }}
        {{ Form::text('family', $instrument ->family) }}
        {{ Form::label('type','instrument') }}
        {{ Form::text('type',$instrument ->type) }}
        {{ Form::label('brand','marque') }}
        {{ Form::text('brand',$instrument ->brand) }}
        {{ Form::label('name','dénomination') }}
        {{ Form::text('name',$instrument ->name) }}
        {{ Form::label('quantity','stock') }}
        {{ Form::number('quantity',$instrument ->quantity) }}
        {{ Form::submit('Modifier') }}
@endsection
