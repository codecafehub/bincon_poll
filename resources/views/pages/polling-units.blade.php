@extends('layouts.app')
@section('content')

<div class="home-content">
    <div class="table-responsive">
        <table id="add-row" class="display table table-striped table-hover" >
            <thead>
                <tr>
                    <th>No.</th>
                    <th>polling_unit_name</th>
                    <th>polling_unit_number</th>
                    <th>polling_unit_description</th>
                    <th>ward_id</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($pollingUnits as $index =>  $data)
                <tr>
                    
                    <td>{{$index + 1}}</td>
                    <td>{{$data->polling_unit_name}}</td>
                    <td>{{$data->polling_unit_number}}</td>
                    <td>{{$data->polling_unit_description}}</td>
                    <td>{{$data->ward_id}}</td>
                    <td>
                        <div class="form-button-action">
                            <a 
                            href="{{route('polling-unit-results', base64_encode($data->uniqueid))}}"
                            type="button" data-toggle="tooltip" title="" class="btn btn-sm btn-primary " data-original-title="view">
                                view results
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
 
@endsection

