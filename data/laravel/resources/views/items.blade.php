@extends('layouts.app')

@section('content')
    <h4>Instrument</h4>
    @auth 
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
    <a href="http://192.168.33.10/insertInstrument">Ajouter</a>
    @else
      <table>
          <tr>
              <th>Family</th>
              <th>Type</th>
              <th>Brand</th>
              <th>Name</th>
          </tr>
              @foreach($instruments as $instrument)
                  <tr>
                      <td>{{ $instrument->family }}</td>
                      <td>{{ $instrument->type }}</td>
                      <td>{{ $instrument->brand }}</td>
                      <td>{{ $instrument->name }}</td>
                  @if($instrument->quantity < 3)
                      <td class="ALERTE-STOCK">{{ $instrument->quantity }}</td>
                  @elseif($instrument->quantity >3 && $instrument->quantity < 5)
                    <td class="ALERTE2-STOCK">{{ $instrument->quantity }}</td>
                  @else
                  @endif
                  </tr>
              @endforeach
      </table>
    @endauth

@endsection
