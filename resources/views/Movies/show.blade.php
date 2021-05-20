@extends('movies.layout')
  
@section('content')
    <div class="row" style="background-color: grey">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Movie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('movies.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Movie Name:</strong>
                {{ $movie->movie_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $movie->overview }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Release Year:</strong>
                {{ $movie->year }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Runtime:</strong>
                {{ $movie->runtime }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cast Name:</strong>
                {{ $movie->cast }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Movie Image:</strong>
                <div>      
                    <img width="30%" src="/img/{{$movie ->image}}" />
                </div>
            </div>
        </div>
    </div>
@endsection