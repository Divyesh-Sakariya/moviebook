@extends('movies.layout')
   
@section('content')
    
<div class="row bg-gray-400">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class=" mt-5 mb-5">Edit Actor</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary mt-3" href="{{route('actors.index')}}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
               
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('actors.update',$actor->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{$actor->name}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bio:</strong>
                <input type="text" class="form-control" style="height:50px" name="bio"
                value="{{$actor->bio}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birthdate:</strong>
                <input type="date" name="birthdate" class="form-control" value="{{$actor->birthdate}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Listmovies:</strong>
                <input type="text" name="listmovies" class="form-control" value="{{$actor->listmovies}}">
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection