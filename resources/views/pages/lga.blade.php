@extends('layouts.app')
@section('content')

<div class="home-content">
    <div class="table-responsive">
        <table id="add-row" class="display table table-striped table-hover" >
            <thead>
                <tr>
                    <th>No.</th>
                    <th>lga_name</th>
                    <th>lga_id</th>
                    <th>state_id</th>
                    <th>lga_description</th>
                    <th>entered_by_user</th>
                    <th>date_entered</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($lgaUnit as $index =>  $data)
                <tr>
                    
                    <td>{{$index + 1}}</td>
                    <td>{{$data->lga_name}}</td>
                    <td>{{$data->lga_id}}</td>
                    <td>{{$data->state_id}}</td>
                    <td>{{$data->lga_description}}</td>
                    <td>{{$data->entered_by_user}}</td>
                    <td>{{$data->date_entered}}</td>
                    <td>
                        <div class="form-button-action">
                            <a 
                            href="{{route('lga-results', base64_encode($data->uniqueid))}}"
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

