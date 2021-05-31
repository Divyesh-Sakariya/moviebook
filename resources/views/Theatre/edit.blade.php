@extends('movies.layout')
  
@section('content')
<div class="row bg-gray-400">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class=" mt-5 mb-5">Update Theatre</h2>
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
<form action="{{ route('theatre.update', $theatre->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{$theatre->name}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Starttime:</strong>
                <input type="time" class="form-control" style="height:50px" name="starttime"
                    value="{{$theatre->starttime}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Endtime:</strong>
                <input type="time" name="endtime" class="form-control" value="{{$theatre->endtime}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" value="{{$theatre->price}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SeatsAvailable:</strong>
                <input type="number" name="seatsAvailable" class="form-control" value="{{$theatre->seatsAvailable}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Seat:</strong>
                <input type="number" name="totalseat" class="form-control" value="{{$theatre->totalseat}}">
            </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection