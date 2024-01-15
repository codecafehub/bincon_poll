@extends('layouts.app')
@section('content')

    <div class="home-content">
        <p>LGA Name: {{ $lga->name }}</p>

        <h2>Polling Units</h2>
        <ul>
            @foreach ($units as $unit)
                <li>{{ $unit->polling_unit_name }}</li>
            @endforeach
        </ul>

        <h2>Polling Unit Results</h2>
        <table>
            <thead>
                <tr>
                    <th>Party Abbreviation</th>
                    <th>Party Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($unitResults as $result)
                    <tr>
                        <td>{{ $result->party_abbreviation }}</td>
                        <td>{{ $result->party_score }}</td>
                    </tr>
                @endforeach
            </tbody>  
        </table>         
    </div>
@endsection
