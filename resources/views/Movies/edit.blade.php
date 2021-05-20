@extends('movies.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Movie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('movies.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('movies.update',$movie->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row" style="background-color: gray">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Movie Name:</strong>
                    <input type="text" name="movie_name" value="{{ $movie->movie_name }}" class="form-control" placeholder="Movie Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Overview:</strong>
                    <textarea class="form-control" style="height:150px" name="overview" placeholder="overview">{{ $movie->overview }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Release Year:</strong>
                    <input type="text" name="year" value="{{ $movie->year }}" class="form-control" placeholder="year">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Runtime:</strong>
                    <input type="text" name="runtime" value="{{ $movie->runtime }}" class="form-control" placeholder="runtime">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cast:</strong>
                    <input type="text" name="cast" value="{{ $movie->cast }}" class="form-control" placeholder="cast">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Movie Image:</strong>
                    <input type="file" name="image" value="{{ $movie->image }}" class="form-control" placeholder="image">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection