@extends('layouts.app')
@section('content')

<div class="home-content">
    <div class="table-responsive">
       <div class="unit-details">
        
            <li>
                <h4>Polling Unit ID</h4>
                <small>{{ $unit->polling_unit_id }}</small>
            </li>
            <li>
                <h4>Polling Unit Name</h4>
                <small>{{ $unit->polling_unit_name }}</small>
            </li>
            <li>
                <h4>Polling Unit Number</h4>
                <small>{{ $unit->polling_unit_number }}</small>
            </li>
            <li>
                <h4>Polling Unit desccription</h4>
                <small>{{ $unit->polling_unit_description }}</small>
            </li>
            <li>
               <h4> Ward</h4>
                <small>{{ $unit->ward_id }}</small>
            </li>
        
       </div>
        <table id="add-row" class="display table table-striped table-hover">
            <thead>
                <tr>
                    <th>S/NO</th>
                    <th>Result ID</th>
                    <th>Party Abbrivation</th>
                    <th>Party Score</th>
                    <th>Entered By</th>
                    <th>User IP Address</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
              {{-- Display results of the selected Polling Unit --}}
              @foreach($unitResults as $result)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $result->result_id }}</td>
                  <td>{{ $result->party_abbreviation }}</td>
                  <td>{{ $result->party_score }}</td>
                  <td>{{ $result->entered_by_user }}</td>
                  <td>{{ $result->user_ip_address}}</td>
                  <td>{{ $result->date_entered }}</td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
