@extends('movies.layout')
  
@section('content')
<div class="row bg-gray-400">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class=" mt-5 mb-5">Add New Actor</h2>
        </div>
        
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach($errors->all() as $error)
                
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('theatre.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Starttime:</strong>
                <input type="time" class="form-control" style="height:50px" name="starttime"
                    placeholder="Start Time">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Endtime:</strong>
                <input type="time" name="endtime" class="form-control" placeholder="End Time">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="Enter Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SeatsAvailable:</strong>
                <input type="number" name="seatsAvailable" class="form-control" placeholder="Enter SeatsAvailable">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Seat:</strong>
                <input type="number" name="totalseat" class="form-control" placeholder="Enter TotalSeat">
            </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection