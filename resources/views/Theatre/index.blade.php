@extends('movies.layout')
 
@section('content')
<div class="row bg-gray-400">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class=" text-5xl text-gray-900">Threatre </h2>
        </div>

        <br>
        <br>
        <div class="pull-right mb-3">
            <a class="btn btn-success" href="{{ route('theatre.create') }}">Add New Theatre
                </a>
                <a class="btn btn-primary" href="{{ route('movies.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>successfully</p>
    </div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>City</th>
        <th>StartTime</th>
        <th>EndTime</th>
        <th>Price</th>
        <th>SeatsAvailable</th>
        <th>TotalSeat</th>

        <th width="280px">Action</th>
    </tr>
    @foreach ($theatres as $theatre)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$theatre->name}}</td>
            <td>{{$theatre->city}}</td>
            <td>{{$theatre->starttime}}</td>
            <td>{{$theatre->endtime}}</td>
            <td>{{$theatre->price}}</td>
            <td>{{$theatre->seatsAvailable}}</td>
            <td>{{$theatre->totalseat}}</td>
           

            <td>
                <form action="{{route('theatre.destroy',$theatre->id)}}" method="POST">

                   <button class="btn btn-success">
                   <a href="{{route('theatre.edit',$theatre->id)}}" title="show">
                        Edit</a>
</button>
                    
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger ml-3">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection