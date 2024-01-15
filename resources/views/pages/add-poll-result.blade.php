@extends('layouts.app')
@section('content')

<div class="home-content">
    <div class="form-container">
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <h2 class="" style="padding-bottom: 20px">Add polling Result</h2>
            <div class="form-group">
                <div class="form-control">
                    <label for="">select party</label>
                    <select name="party_id" id="">
                        <option value="">
                            @include('options.parties')
                        </option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="">Party Score</label>
                    <input type="text" name="party_score">
                </div>
                <div class="form-control">
                    <label for="">Entered By User</label>
                    <input type="text" name="entered_by_user">
                </div>
                <div class="form-control">
                    <label for="">Date Entered</label>
                    <input type="date" name="date_entered">
                </div>
                <div class="form-control">
                    <Button>save</Button>
                </div>
            </div>
            
        </form>
    </div>
</div>
 
@endsection

