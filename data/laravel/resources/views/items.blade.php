@extends('layouts.app')

@section('content')
    <h4>Instrument</h4>
    <table>
        <tr>
            <th>Family</th>
            <th>Type</th>
            <th>Brand</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
            @foreach($instruments as $instrument)
                <tr>
                    <td>{{ $instrument->family }}</td>
                    <td>{{ $instrument->type }}</td>
                    <td>{{ $instrument->brand }}</td>
                    <td>{{ $instrument->name }}</td>
                    <td>{{ $instrument->quantity }}</td>
                    <td>
                        {{ Form::open(['url' => '/deleteInstrumentAction']) }}
                            {{ Form::hidden('id', $instrument->id) }}
                            {{ Form::submit('X') }}
                        {{ Form::close() }}
                    </td>
                    <td>
                        {{ Form::open(['url' => '/updateInstrument']) }}
                            {{ Form::hidden('id', $instrument->id) }}
                            {{ Form::submit('U') }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
    </table>

@endsection
